<?php

use App\Http\Controllers\CalculatorController;

// Add a route for the add method of the CalculatorController
Route::post('/add', [CalculatorController::class, 'add']);