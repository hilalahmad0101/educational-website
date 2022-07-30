<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBlog extends Component
{

    public $image, $old_image, $category, $author, $title, $description, $edit_id, $offer_count = 1;
    use WithFileUploads;
    public $authors;
    public function mount($id)
    {
        $this->edit_id = $id;
        $blog = Blog::findOrFail($id);
        $this->title = $blog->title;
        $this->description = $blog->description;
        $this->old_image = $blog->image;
        $this->category = $blog->category;
        $this->author = $blog->author_id;
    }
    public function render()
    {
        $this->authors = Admin::all();
        return view('livewire.admin.update-blog')->layout('layout.admin-app');
    }

    public function nextOffer1()
    {
        $this->offer_count = 2;
    }
    public function nextOffer2()
    {
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
    public function update($id)
    {
        $blog = Blog::findOrFail($id);
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";

        if ($this->image) {
            $path1 = public_path('storage\\' . $blog->image);
            if (File::exists($path1)) {
                File::delete($path1);
            }
            $filename1 = $this->image->store('admin/blog__image', 'public');
        } else {
            $filename1 = $this->old_image;
        }

        $blog->image = $filename1;
        $blog->categories = $this->category;
        $blog->author_id = $this->author;
        $blog->title = $this->title;
        $blog->description = $this->description;
        $result = $blog->save();
        if ($result) {
            session()->flash('success', 'Blog Update Successfully');
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
