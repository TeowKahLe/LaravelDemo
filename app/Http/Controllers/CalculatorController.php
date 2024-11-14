<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // Define the add method to handle the addition of two numbers
    public function add(Request $request)
    {
        // Get the input data from the request
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');

        // Validate that both inputs are numeric
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return "Please enter valid numbers.";  // Return an error message
        }

        // Perform the addition
        $result = $num1 + $num2;

        // Return the result as a string
        return "The result is: $result.";
    }
}


