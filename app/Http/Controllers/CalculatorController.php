<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // Define the add method to handle the addition of two numbers
    public function add(Request $request)
    {
        // Validate the input data (ensure both numbers are provided)
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        // Get the values from the form
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');

        // Perform the addition
        $result = $num1 + $num2;

        // Return the result to the user
        return view('calculator', ['result' => $result]);
    }
}