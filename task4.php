<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Even or Odd Number Checker</h2>
    <form method="post" action="">
        Enter a number: 
        <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    // Check if the form has been submitted
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        // Check if the input is a valid integer
        if($_POST['number'] == (int)$_POST['number']){

            // Check if the number is even or odd
            if ($number % 2 == 0) {
                echo "<p>$number is an even number.</p>";
            } else {
                echo "<p>$number is an odd number.</p>";
            }
        }
        else{
            echo "<p>Please enter a valid integer.</p>";
        }

        }
    
    ?>
</body>
</html>
