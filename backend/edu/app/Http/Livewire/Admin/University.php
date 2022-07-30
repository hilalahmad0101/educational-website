<?php

namespace App\Http\Livewire\Admin;

use App\Models\University as ModelsUniversity;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class University extends Component
{
    use WithPagination;
    public function render()
    {
        $universities = ModelsUniversity::orderBy('id', 'desc')->get();
        return view('livewire.admin.university', compact('universities'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $universities = ModelsUniversity::findOrFail($id);
        $path1 = public_path('storage\\' . $universities->image);
        if (File::exists($path1)) {
            File::delete($path1);
        }
        $result = $universities->delete();
        if ($result) {
            session()->flash('success', 'University Delete Succcessfully');
        }
    }
}
