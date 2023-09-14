<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form action="task6.php" method="post">
        Enter first number: <input type="number" name="num1" id="num1"><br>
        Enter second number: <input type="number" name="num2" id="num2"><br>
        <input type="submit" value="Compare" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        //  Use the ternary operator to determine the larger number
            $result = ($num1 > $num2) ? $num1 : $num2;
            echo "The larger number is $result";
        }
        ?>
</body>
</html>