<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog as ModelsBlog;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogs = ModelsBlog::orderBy('id', 'desc')->get();
        return view('livewire.admin.blog', compact('blogs'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $blog = ModelsBlog::findOrFail($id);
        $path1 = public_path('storage\\' . $blog->image);
        if (File::exists($path1)) {
            File::delete($path1);
        }
        $result = $blog->delete();
        if ($result) {
            session()->flash('success', 'Blog Delete Succcessfully');
        }
    }
}
