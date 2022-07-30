<?php

namespace App\Http\Livewire;

use App\Models\StudyDestination as ModelsStudyDestination;
use Livewire\Component;

class StudyDestination extends Component
{
    public $page_limit = 6;
    public function render()
    {
        $studys = ModelsStudyDestination::orderBy('id', 'desc')->paginate($this->page_limit);
        return view('livewire.study-destination', compact('studys'))->layout('layout.app');
    }
}
