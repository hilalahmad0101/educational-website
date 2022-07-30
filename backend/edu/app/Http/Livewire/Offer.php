<?php

namespace App\Http\Livewire;

use App\Models\offer as ModelsOffer;
use Livewire\Component;
use Livewire\WithPagination;

class Offer extends Component
{
    public $page_limit = 6;
    use WithPagination;
    public function render()
    {
        $offers = ModelsOffer::orderBy('id', 'desc')->paginate($this->page_limit);
        return view('livewire.offer', compact('offers'))->layout('layout.app');
    }
}
