<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SubmissionsTable extends Component
{
    public $headers = [];
    public $data = [];

    public function mount()
    {
        // Sample data - Replace this with your actual data
        $this->headers = ['ID' => "id", 'UOA_ID' => "unitOfAnalysis.id", 'Answers' => "answers"];

        $this->data = \App\Models\Submission::all();

        foreach ($this->data as $row)
            $row["answers"] =  json_encode($row["answers"]);
    }



    #[On('submission-created')]
    public function updateSubmissionList()
    {
        $this->data = \App\Models\Submission::all();

        foreach ($this->data as $row)
            $row["answers"] =  json_encode($row["answers"]);
    }

    public function render()
    {
        return view('livewire.table');
    }
}
