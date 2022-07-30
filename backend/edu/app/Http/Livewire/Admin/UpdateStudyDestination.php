<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudyDestination;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateStudyDestination extends Component
{
    public $image, $icon, $title, $description, $old_image, $old_icon, $edit_id, $offer_count = 1;
    use WithFileUploads;
    public function mount($id)
    {
        $this->edit_id = $id;
        $destination = StudyDestination::findOrFail($id);
        $this->title = $destination->title;
        $this->description = $destination->description;
        $this->old_image = $destination->image;
        $this->old_icon = $destination->country_flag;
    }
    public function render()
    {
        return view('livewire.admin.update-study-destination')->layout('layout.admin-app');
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
        $destination = StudyDestination::findOrFail($id);
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $filename1 = "";
        $filename2 = "";

        if ($this->image) {
            $path1 = public_path('storage\\' . $destination->image);
            if (File::exists($path1)) {
                File::delete($path1);
            }
            $filename1 = $this->image->store('admin/destination__image', 'public');
        } else {
            $filename1 = $this->old_image;
        }
        if ($this->icon) {
            $path2 = public_path('storage\\' . $destination->image);
            if (File::exists($path2)) {
                File::delete($path2);
            }
            $filename2 = $this->icon->store('admin/destination__icon', 'public');
        } else {
            $filename2 = $this->old_icon;
        }

        $destination->image = $filename1;
        $destination->country_flag = $filename2;
        $destination->title = $this->title;
        $destination->description = $this->description;
        $result = $destination->save();
        if ($result) {
            session()->flash('success', 'destination Update Successfully');
            $this->offer_count = 1;
            $this->image = "";
            $this->icon = "";
            $this->title = "";
            $this->description = "";
            return redirect(route('admin.get-destination'));
        }
    }
}
