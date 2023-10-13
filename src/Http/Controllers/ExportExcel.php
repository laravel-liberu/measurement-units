<?php

namespace LaravelLiberu\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeasurementUnits\Tables\Builders\MeasurementUnit;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = MeasurementUnit::class;
}
