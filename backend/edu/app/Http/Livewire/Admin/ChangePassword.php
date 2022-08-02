<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $username, $new_password;
    public function render()
    {
        return view('livewire.admin.change-password')->layout('layout.admin-app');
    }
    public function update()
    {
        $admins = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $this->validate([
            'username' => 'required',
            'new_password' => 'required',
        ]);
        $admins->password = Hash::make($this->new_password);
        $admins->save();
        session()->flash('success', 'Password Change Successfully');
    }
}
