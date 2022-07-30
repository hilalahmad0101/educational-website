<?php

namespace App\Http\Livewire\Admin;

use App\Models\University;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateUniversity extends Component
{
    public $image, $old_image, $country_name, $title, $edit_id, $description, $offer_count = 1;
    public $countries;
    use WithFileUploads;
    public function mount($id)
    {
        $this->edit_id = $id;
        $universities = University::findOrFail($id);
        $this->title = $universities->title;
        $this->description = $universities->description;
        $this->old_image = $universities->image;
        $this->country_name = $universities->country_name;
    }
    public function render()
    {
        $response = Http::get('https://restcountries.com/v2/all');
        $this->countries = $response->json();
        return view('livewire.admin.update-university')->layout('layout.admin-app');
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
    public function update($id)
    {
        $university = University::findOrFail($id);
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";

        if ($this->image) {
            $path1 = public_path('storage\\' . $university->image);
            if (File::exists($path1)) {
                File::delete($path1);
            }
            $filename1 = $this->image->store('admin/university__image', 'public');
        } else {
            $filename1 = $this->old_image;
        }

        $university->image = $filename1;
        $university->country_name = $this->country_name;
        $university->title = $this->title;
        $university->description = $this->description;
        $result = $university->save();
        if ($result) {
            session()->flash('success', 'University Update Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->country_name = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-university'));
        }
    }
}
