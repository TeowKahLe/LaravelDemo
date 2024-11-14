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
    <form action="{{ url('/add') }}" method="POST">
        @csrf <!-- CSRF token for security -->

        <label for="number1">Number 1:</label>
        <input type="text" id="number1" name="number1" required><br><br>

        <label for="number2">Number 2:</label>
        <input type="text" id="number2" name="number2" required><br><br>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>