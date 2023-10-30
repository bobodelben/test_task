<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        \App\Models\Type::create(["id" => 1, "name" => "Student"]);
        \App\Models\Type::create(["id" => 2, "name" => "Teacher"]);

        $survey = \App\Models\Survey::create(["type_id" => 1, "name" => "Students"]);
        $survey->questions()->create(["field" => "Year of Admission", "type" => "number"]);
        $survey->questions()->create(["field" => "Avg Score", "type" => "select", "options" => ["60-74", "75-89", "90-100"]]);

        $survey = \App\Models\Survey::create(["type_id" => 2, "name" => "Teachers"]);

        $survey->questions()->create(["field" => "Degree"]);
        $survey->questions()->create(["field" => "Lessons", "type" => "checkbox", "options" => ["Math", "Literature", "Philosophy"]]);

        \App\Models\UnitOfAnalysis::create(["type_id" => 1, "user_id" => $user->id]);
    }
}
