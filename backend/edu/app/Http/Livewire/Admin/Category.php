<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use SNMP;

class Category extends Component
{

    public function render()
    {
        $categorys = ModelsCategory::orderBy('id', 'desc')->get();
        return view('livewire.admin.category', compact('categorys'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id)->delete();
        if ($category) {
            session()->flash('success', 'Category deleted successfully');
        }
    }
}
