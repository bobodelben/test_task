<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SubmissionForm;
use App\Livewire\SurveysTable;
use App\Models\UnitOfAnalysis;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SubmissionFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        $this->seed();

        Livewire::test(SubmissionForm::class)
            ->assertStatus(200);
    }

    public function test_assert_authentication()
    {
        $this->get('/test-task')
            ->assertDontSeeLivewire(SurveysTable::class);

        $user = User::factory()->create();
        $this->actingAs($user);

        $this->get('/test-task')
            ->assertSeeLivewire(SurveysTable::class);
    }

    public function test_submission_works()
    {
        $this->seed();
        $uoa = UnitOfAnalysis::first();
        Livewire::test(SubmissionForm::class, ["uoaId" => $uoa->id])
            ->set("answers", ["test" => "test"])
            ->call("submit")
            ->assertSet("answers", [])
            ->assertStatus(200);

        $this->assertEquals($uoa->submission->answers, ["test" => "test"]);
    }
}
