<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>

    <!-- Form to send data to the 'add' method of CalculatorController -->
    <form action="/add" method="post">
        @csrf <!-- Include CSRF token for security -->
        <input type="text" name="number1" placeholder="Enter first number" required>
        <input type="text" name="number2" placeholder="Enter second number" required>
        <button type="submit">Add</button>
    </form>

    <!-- Show the result if it's set -->
    @isset($result)
        <h2>Result: {{ $result }}</h2>
    @endisset
</body>
</html>
