<?php

namespace App\Livewire;

use Livewire\Component;

class UoasTable extends Component
{
    public $headers = [];
    public $data = [];

    public function mount()
    {
        // Sample data - Replace this with your actual data
        $this->headers = ['ID' => "id", 'Type' => "type.name", 'User' => "user.name"];

        $this->data = \App\Models\UnitOfAnalysis::all();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
