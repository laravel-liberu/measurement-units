<?php

namespace LaravelLiberu\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeasurementUnits\Tables\Builders\MeasurementUnit;
use LaravelLiberu\Tables\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = MeasurementUnit::class;
}
