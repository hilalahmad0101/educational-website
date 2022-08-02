<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $category_name, $edit_id;
    public function mount($id)
    {
        $this->edit_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.update-category')->layout('layout.admin-app');
    }
    public function update()
    {
        $category = Category::findOrFail($this->edit_id);
        $validate = $this->validate([
            'category_name' => 'required'
        ]);
        $category->category_name = $this->category_name;
        $result = $category->save();
        if ($result) {
            session()->flash('success', 'Category successfully Updated');
            return redirect(route('admin.get-category'));
        }
    }
}
