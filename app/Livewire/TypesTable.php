<?php

namespace App\Livewire;

use Livewire\Component;

class TypesTable extends Component
{
    public $headers = [];
    public $data = [];

    public function mount()
    {
        // Sample data - Replace this with your actual data
        $this->headers = ['ID' => "id", 'Name' => "name"];

        $this->data = \App\Models\Type::all();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
