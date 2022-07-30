<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudyDestination;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddStudyDestination extends Component
{
    public $image, $icon, $title, $description, $offer_count = 1;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.add-study-destination')->layout('layout.admin-app');
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
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $this->offer_count = 4;
    }
    public function store()
    {
        $destination = new StudyDestination();
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";
        $filename2 = "";

        if ($this->image) {
            $filename1 = $this->image->store('admin/destination__image', 'public');
        }
        if ($this->icon) {
            $filename2 = $this->icon->store('admin/destination__icon', 'public');
        }

        $destination->image = $filename1;
        $destination->country_flag = $filename2;
        $destination->title = $this->title;
        $destination->description = $this->description;
        $result = $destination->save();
        if ($result) {
            session()->flash('success', 'Destination Save Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->icon = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-destination'));
        }
    }
}
