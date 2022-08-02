<?php

namespace App\Http\Livewire;

use App\Models\University as ModelsUniversity;
use Livewire\Component;
use Livewire\WithPagination;

class University extends Component
{
    public $page_limit = 6;
    use WithPagination;
    public $universities;
    public $categorys;
    public function render()
    {
        $this->universities = ModelsUniversity::orderBy('id', 'desc')->get();
        $this->categorys = ModelsUniversity::select('country_name')->distinct()->get();
        return view('livewire.university')->layout('layout.app');
    }

    public function showPostByCountry($data)
    {
        $this->universities = ModelsUniversity::where('country_name', $data)->get();
    }
}
