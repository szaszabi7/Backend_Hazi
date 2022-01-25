<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student' => User::all()->random(),
            'url' => $this->faker->url(),
            'review' => '',
            'grade' => 0
        ];
    }
}
