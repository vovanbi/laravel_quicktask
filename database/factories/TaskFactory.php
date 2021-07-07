<?php

namespace Database\Factories;

use App\Models\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=> \Carbon\Carbon::now()
        ];
    }
}
