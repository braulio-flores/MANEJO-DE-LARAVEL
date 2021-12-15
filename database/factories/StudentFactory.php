<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array
     */
    protected $model = Student::class;

    public function definition()
    {
        return [
            "nombre"=>$this->faker->sentence(),
            "description"=>$this->faker->paragraph(),
            "categoria"=>$this->faker->randomElement(["Estuadiante","Recursador"])
        ];
    }
}
