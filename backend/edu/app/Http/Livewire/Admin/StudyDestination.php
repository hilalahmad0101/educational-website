<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudyDestination as ModelsStudyDestination;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class StudyDestination extends Component
{
    public function render()
    {
        $destinations = ModelsStudyDestination::orderBy('id', 'desc')->get();
        return view('livewire.admin.study-destination', compact('destinations'))->layout('layout.admin-app');;
    }
    public function delete($id)
    {
        $destinations = ModelsStudyDestination::findOrFail($id);
        $path1 = public_path('storage\\' . $destinations->image);
        $path2 = public_path('storage\\' . $destinations->country_flag);
        if (File::exists($path1)) {
            File::delete($path1);
        }
        if (File::exists($path2)) {
            File::delete($path2);
        }
        $result = $destinations->delete();
        if ($result) {
            session()->flash('success', 'Destination Delete Succcessfully');
        }
    }
}
