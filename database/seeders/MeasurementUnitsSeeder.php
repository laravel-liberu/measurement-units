<?php

namespace LaravelLiberu\MeasurementUnits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitsSeeder extends Seeder
{
    private const Units = [
        ['name' => 'Piece', 'description' => null],
    ];

    public function run()
    {
        Collection::wrap(self::Units)
            ->each(fn ($units) => MeasurementUnit::factory()->create($units));
    }
}
