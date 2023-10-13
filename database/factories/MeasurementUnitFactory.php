<?php

namespace LaravelLiberu\MeasurementUnits\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitFactory extends Factory
{
    protected $model = MeasurementUnit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
        ];
    }
}
