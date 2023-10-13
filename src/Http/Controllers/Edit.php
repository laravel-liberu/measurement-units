<?php

namespace LaravelLiberu\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeasurementUnits\Forms\Builders\MeasurementUnit;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit as Model;

class Edit extends Controller
{
    public function __invoke(Model $measurementUnit, MeasurementUnit $form)
    {
        return ['form' => $form->edit($measurementUnit)];
    }
}
