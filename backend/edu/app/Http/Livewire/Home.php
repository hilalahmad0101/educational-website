<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\University;
use Livewire\Component;

class Home extends Component
{
    public $blogs;
    public $universities;
    public function render()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        $this->universities = University::orderBy('id', 'desc')->get();
        return view('livewire.home')->layout('layout.app');
    }
}
