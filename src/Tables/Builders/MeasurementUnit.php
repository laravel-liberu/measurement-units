<?php

namespace LaravelLiberu\MeasurementUnits\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit as Model;
use LaravelLiberu\Tables\Contracts\Table;

class MeasurementUnit implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/measurementUnits.json';

    public function query(): Builder
    {
        return Model::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
