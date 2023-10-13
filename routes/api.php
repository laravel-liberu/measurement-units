<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Create;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Destroy;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Edit;
use LaravelLiberu\MeasurementUnits\Http\Controllers\ExportExcel;
use LaravelLiberu\MeasurementUnits\Http\Controllers\InitTable;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Options;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Store;
use LaravelLiberu\MeasurementUnits\Http\Controllers\TableData;
use LaravelLiberu\MeasurementUnits\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->group(function () {
        Route::prefix('api/administration/measurementUnits')
            ->as('administration.measurementUnits.')
            ->group(function () {
                Route::get('create', Create::class)->name('create');
                Route::post('', Store::class)->name('store');
                Route::get('{measurementUnit}/edit', Edit::class)->name('edit');

                Route::patch('{measurementUnit}', Update::class)->name('update');

                Route::delete('{measurementUnit}', Destroy::class)->name('destroy');

                Route::get('initTable', InitTable::class)->name('initTable');
                Route::get('tableData', TableData::class)->name('tableData');
                Route::get('exportExcel', ExportExcel::class)->name('exportExcel');

                Route::get('options', Options::class)->name('options');
            });
    });
