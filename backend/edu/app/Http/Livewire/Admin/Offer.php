<?php

namespace App\Http\Livewire\Admin;

use App\Models\offer as ModelsOffer;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Offer extends Component
{

    public function render()
    {
        $offers = ModelsOffer::orderBy('id', 'desc')->get();
        return view('livewire.admin.offer', compact('offers'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $offers = ModelsOffer::findOrFail($id);
        $path1 = public_path('storage\\' . $offers->image);
        $path2 = public_path('storage\\' . $offers->icon);
        if (File::exists($path1)) {
            File::delete($path1);
        }
        if (File::exists($path2)) {
            File::delete($path2);
        }
        $result = $offers->delete();
        if ($result) {
            session()->flash('success', 'Offer Delete Succcessfully');
        }
    }
}
