<?php

namespace LaravelLiberu\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = MeasurementUnit::class;
}
