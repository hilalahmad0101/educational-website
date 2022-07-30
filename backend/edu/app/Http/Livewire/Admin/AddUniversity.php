<?php

namespace App\Http\Livewire\Admin;

use App\Models\University;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;

class AddUniversity extends Component
{
    public $image, $country_name, $title, $description, $offer_count = 1;
    public $countries;
    use WithFileUploads;
    public function render()
    {
        $response = Http::get('https://restcountries.com/v2/all');
        $this->countries = $response->json();
        return view('livewire.admin.add-university')->layout('layout.admin-app');
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
            'country_name' => 'required',

        ]);
        $this->offer_count = 4;
    }
    public function store()
    {
        $university = new University();
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";

        if ($this->image) {
            $filename1 = $this->image->store('admin/university__image', 'public');
        }

        $university->image = $filename1;
        $university->country_name = $this->country_name;
        $university->title = $this->title;
        $university->description = $this->description;
        $result = $university->save();
        if ($result) {
            session()->flash('success', 'Destination Save Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->country_name = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-university'));
        }
    }
}
