<?php

namespace App\Http\Livewire\Admin;

use App\Models\offer;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddOffer extends Component
{
    public $image, $icon, $title, $description, $offer_count = 1;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.add-offer')->layout('layout.admin-app');
    }


    public function nextOffer1()
    {
        $this->offer_count = 2;
    }
    public function nextOffer2()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);
        $this->offer_count = 3;
    }
    public function nextOffer3()
    {
        $this->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',

        ]);
        $this->offer_count = 4;
    }
    public function store()
    {
        $offer = new offer();
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";
        $filename2 = "";

        if ($this->image) {
            $filename1 = $this->image->store('admin/offer__image', 'public');
        }
        if ($this->icon) {
            $filename2 = $this->icon->store('admin/offer__icon', 'public');
        }

        $offer->image = $filename1;
        $offer->icon = $filename2;
        $offer->title = $this->title;
        $offer->description = $this->description;
        $result = $offer->save();
        if ($result) {
            session()->flash('success', 'Offer Save Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->icon = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-offer'));
        }
    }
}
