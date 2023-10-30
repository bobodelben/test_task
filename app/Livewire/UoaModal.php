<?php

namespace App\Livewire;

use Livewire\Component;

class UoAModal extends Component
{
    public $open = false;

    public $isModalOpen = false;

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function render()
    {
        return view('livewire.uoa-modal');
    }
}
