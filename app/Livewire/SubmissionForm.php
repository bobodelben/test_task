<?php

namespace App\Livewire;

use Livewire\Component;

class SubmissionForm extends Component
{
    public $uoa;

    public $questions = [];
    public $answers = [];

    public function mount($uoaId = null)
    {
        if ($uoaId == null)
            return;

        // Find the survey by its ID and eager load the questions and submission
        $this->uoa = \App\Models\UnitOfAnalysis::with(['type.survey.questions', 'submission'])->find($uoaId);


        if ($this->uoa == null)
            return;

        // Build the form fields based on the questions
        $this->questions = $this->uoa->type->survey->questions;

        if ($this->uoa->submission != null)
            $this->answers = $this->uoa->submission->answers;
    }

    public function submit()
    {
        $this->uoa->submission()->delete();
        $this->uoa->submission()->create(["answers" => $this->answers]);

        $this->dispatch('submission-created'); 

        $this->answers = [];
    }

    public function render()
    {
        return view('livewire.submission-form');
    }
}
