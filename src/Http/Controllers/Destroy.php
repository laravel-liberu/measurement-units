<?php

namespace LaravelLiberu\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;

class Destroy extends Controller
{
    public function __invoke(MeasurementUnit $measurementUnit)
    {
        $measurementUnit->delete();

        return [
            'message' => __('The measurement unit was successfully deleted'),
            'redirect' => 'administration.measurementUnits.index',
        ];
    }
}
