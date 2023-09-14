<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define variables for the test scores
    $test1 = $test2 = $test3 = $average = $grade = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the test scores from the form
        $test1 = $_POST["test1"];
        $test2 = $_POST["test2"];
        $test3 = $_POST["test3"];

        // Calculate the average
        $average = ($test1 + $test2 + $test3) / 3;

        // Determine the corresponding letter grade
       if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="test1">Test 1 Score:</label>
        <input type="number" name="test1" id="test1" required><br>

        <label for="test2">Test 2 Score:</label>
        <input type="number" name="test2" id="test2" required><br>

        <label for="test3">Test 3 Score:</label>
        <input type="number" name="test3" id="test3" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the results if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Average Score: $average</p>";
        echo "<p>Grade: $grade</p>";}
    ?>
</body>
</html>
