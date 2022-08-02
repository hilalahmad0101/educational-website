<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AddCategory extends Component
{
    public $category_name;
    public function render()
    {
        return view('livewire.admin.add-category')->layout('layout.admin-app');
    }

    public function store()
    {
        $validate = $this->validate([
            'category_name' => 'required'
        ]);
        $category = Category::create($validate);
        if ($category) {
            session()->flash('success', 'Category successfully created');
            return redirect(route('admin.get-category'));
        }
    }
}
