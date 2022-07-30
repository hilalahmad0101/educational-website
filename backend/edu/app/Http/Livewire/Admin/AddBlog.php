<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBlog extends Component
{
    public $image, $category, $author, $title, $description, $offer_count = 1;
    use WithFileUploads;
    public $authors;
    public function render()
    {
        $this->authors = Admin::all();
        return view('livewire.admin.add-blog')->layout('layout.admin-app');
    }

    public function nextOffer1()
    {
        $this->offer_count = 2;
    }
    public function nextOffer2()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $this->offer_count = 3;
    }
    public function nextOffer3()
    {
        $this->validate([
            'category' => 'required',

        ]);
        $this->offer_count = 4;
    }
    public function nextOffer4()
    {
        $this->validate([
            'author' => 'required',

        ]);
        $this->offer_count = 5;
    }

    public function store()
    {
        $blog = new Blog();
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";

        if ($this->image) {
            $filename1 = $this->image->store('admin/blog__image', 'public');
        }

        $blog->image = $filename1;
        $blog->categories = $this->category;
        $blog->author_id = $this->author;
        $blog->title = $this->title;
        $blog->description = $this->description;
        $result = $blog->save();
        if ($result) {
            session()->flash('success', 'Blog Save Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->category = "";
            $this->author = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-blog'));
        }
    }
}
