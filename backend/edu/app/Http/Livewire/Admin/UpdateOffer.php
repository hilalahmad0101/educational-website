<?php

namespace App\Http\Livewire\Admin;

use App\Models\offer;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateOffer extends Component
{
    public $new_image, $new_icon, $title, $description, $old_image, $old_icon, $edit_id, $offer_count = 1;
    use WithFileUploads;
    public function mount($id)
    {
        $this->edit_id = $id;
        $offer = Offer::findOrFail($id);
        $this->title = $offer->title;
        $this->description = $offer->description;
        $this->old_image = $offer->image;
        $this->old_icon = $offer->icon;
    }
    public function render()
    {
        return view('livewire.admin.update-offer')->layout('layout.admin-app');
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
        $this->offer_count = 4;
    }
    public function update($id)
    {
        $offer = offer::findOrFail($id);
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";
        $filename2 = "";

        if ($this->new_image) {
            $path1 = public_path('storage\\' . $offer->image);
            if (File::exists($path1)) {
                File::delete($path1);
            }
            $filename1 = $this->new_image->store('admin/offer__image', 'public');
        } else {
            $filename1 = $this->old_image;
        }
        if ($this->new_icon) {
            $path2 = public_path('storage\\' . $offer->image);
            if (File::exists($path2)) {
                File::delete($path2);
            }
            $filename2 = $this->new_icon->store('admin/offer__icon', 'public');
        } else {
            $filename2 = $this->old_icon;
        }

        $offer->image = $filename1;
        $offer->icon = $filename2;
        $offer->title = $this->title;
        $offer->description = $this->description;
        $result = $offer->save();
        if ($result) {
            session()->flash('success', 'Offer Update Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->icon = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-offer'));
        }
    }
}
