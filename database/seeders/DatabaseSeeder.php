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

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        \App\Models\Type::create(["id" => 1, "name" => "Student"]);
        \App\Models\Type::create(["id" => 2, "name" => "Teacher"]);

        \App\Models\Question::create(["field" => "Year of Admission", "type" => "number"]);
        \App\Models\Question::create(["field" => "Avg Score", "type" => "select", "options" => json_encode(['60-74', '75-89', '90-100'])]);
    }
}
