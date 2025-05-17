<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GstQueryController;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/gst-query', [GstQueryController::class, 'submitForm'])->name('gst.query.submit');
Route::get('/gst-query', [GstQueryController::class, 'showForm'])->name('gst.form');

Route::get('/gst-query/export', [GstQueryController::class, 'exportCsv'])->name('gst.query.export');

