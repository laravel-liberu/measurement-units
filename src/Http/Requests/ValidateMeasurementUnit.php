<?php

namespace LaravelLiberu\MeasurementUnits\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateMeasurementUnit extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:255', $this->nameUnique()],
            'description' => 'nullable|max:255',
        ];
    }

    private function nameUnique()
    {
        return Rule::unique('measurement_units', 'name')
            ->ignore($this->route('measurementUnit')?->id);
    }
}
