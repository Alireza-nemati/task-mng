<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {


        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'completed' => $this->faker->boolean(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
        ];
    }
}
