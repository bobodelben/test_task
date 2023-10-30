<?php

namespace App\Livewire;

use Livewire\Component;

class SurveysTable extends Component
{
    public $headers = [];
    public $data = [];

    public function mount()
    {
        // Sample data - Replace this with your actual data
        $this->headers = ['ID' => "id", 'Name' => "name", "type" => "type.name"];

        $this->data = \App\Models\Survey::all();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
