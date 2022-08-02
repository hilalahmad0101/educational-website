<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Comment;
use Livewire\Component;

class BlogDetail extends Component
{
    public $edit_id;
    public $name, $email, $message;
    public $comments;
    public $blog;
    public function mount($id)
    {
        $this->edit_id = $id;
    }
    public function render()
    {
        $this->blog = Blog::findOrFail($this->edit_id);
        $this->comments = Comment::where('post_id', $this->edit_id)->get();
        return view('livewire.blog-detail')->layout('layout.app');
    }

    public function store()
    {
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        $comments = new Comment();
        $comments->name = $this->name;
        $comments->email = $this->email;
        $comments->message = $this->message;
        $comments->post_id = $this->edit_id;
        $comments->save();
        $this->fame = "";
        $this->email = "";
        $this->message = "";
    }
}
