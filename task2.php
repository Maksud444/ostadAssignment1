<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter page</h1>

    <?php
    // Define variables to store user inputs and converted temperature
    $input_temperature = "";
    $conversion_direction = "";
    $converted_temperature = "";

    // Function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_temperature = floatval($_POST["input_temperature"]);
        $conversion_direction = $_POST["conversion_direction"];

        // Perform the temperature conversion based on user's selection
        if ($conversion_direction === "celsius_to_fahrenheit") {
            $converted_temperature = celsiusToFahrenheit($input_temperature);
        } elseif ($conversion_direction === "fahrenheit_to_celsius") {
            $converted_temperature = fahrenheitToCelsius($input_temperature);
        }
    }
    ?>

    <form method="post" action="">
        <label for="input_temperature">Enter Temperature:</label>
        <input type="number" name="input_temperature" id="input_temperature" required step="0.01" value="<?php echo $input_temperature; ?>">

        <label for="conversion_direction">Conversion Direction:</label>
        <select name="conversion_direction" id="conversion_direction" required>
            <option value="celsius_to_fahrenheit" <?php if ($conversion_direction === "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius" <?php if ($conversion_direction === "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the converted temperature if available
    if ($converted_temperature !== "") {
        echo "<p>Converted Temperature: <strong>$converted_temperature</strong> </p>";
    }
    ?>
    
</body>
</html>
