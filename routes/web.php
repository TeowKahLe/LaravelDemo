<?php
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

// Display the calculator form
Route::get('/', function () {
    return view('calculator');
});

// Handle form submission
Route::post('/add', [CalculatorController::class, 'add']);