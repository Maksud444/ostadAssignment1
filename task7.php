<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST" action="">
        Enter the first number: <input type="text" name="num1" required><br><br>
        Enter the second number: <input type="text" name="num2" required><br><br>
        Select operation:
        <select name="operation">
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
            <option value="division">Division (/)</option>
        </select><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])){
        // Get user input
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Validate input as numeric values
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Please enter valid numeric values for both numbers.";
        } else {
            // Perform the selected operation
            switch($operation){
                case 'addition':
                    $result = $num1 + $num2;
                    break;
                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'division':
                    // Check for division by zero
                    if($num2 == 0){
                        echo "Error: Division by zero is not allowed.";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    echo "Invalid operation selected.";
                    break;
            }

            // Display the result
            if(isset($result)){
                echo "<p>Result: $result</p>";
            }
        }
    }
    ?>

</body>
</html>
