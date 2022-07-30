<?php

namespace App\Http\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    public $latestBlogs, $page_limit = 6;
    use WithPagination;
    public function render()
    {
        $this->latestBlogs = ModelsBlog::orderBy('id', 'desc')->limit(1)->get();
        $blogs = ModelsBlog::orderBy('id', 'desc')->paginate($this->page_limit);
        return view('livewire.blog', compact('blogs'))->layout('layout.app');
    }
}
