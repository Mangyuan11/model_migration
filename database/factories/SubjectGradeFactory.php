<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubjectGrade>
 */
class SubjectGradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $student = Student::inRandomOrder()->first();
        return [
            'student_id' => $student->id,
            'name' => fake()->randomElement(['Math','PE','English','Filipino','Science']),
            'grade' => fake()->numberBetween(70,90),
        ];
    }
}