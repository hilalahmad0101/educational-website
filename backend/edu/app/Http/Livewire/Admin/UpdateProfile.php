<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    public $name, $email, $username, $profession, $image, $old_image;
    use WithFileUploads;
    public function mount()
    {
        $admins = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $this->name = $admins->name;
        $this->email = $admins->email;
        $this->profession = $admins->profession;
        $this->username = $admins->username;
        $this->old_image = $admins->image;
    }
    public function render()
    {
        return view('livewire.admin.update-profile')->layout('layout.admin-app');
    }

    public function update()
    {
        $admins = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'profession' => 'required',
        ]);
        $filename = "";
        if ($this->image) {
            $path = public_path('storage\\' . $admins->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $filename = $this->image->store('admin/admin', 'public');
        } else {
            $filename = $this->old_image;
        }
        $admins->name = $this->name;
        $admins->email = $this->email;
        $admins->username = $this->username;
        $admins->profession = $this->profession;
        $admins->image = $filename;
        $result = $admins->save();
        if ($result) {
            session()->flash('success', 'Admins Update Successfully');
        }
    }
}
