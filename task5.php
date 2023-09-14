<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <?php
     $temperature = 11;
     if($temperature < 0){
         echo "<p>temperature is freezing.</p>";
     }
     elseif($temperature >= 0 && $temperature < 10){
         echo "<p>temperature is cold.</p>";
     }
     elseif($temperature >= 10 && $temperature < 20){
         echo "<p>temperature is warm.</p>";
     }
     else{
         echo "<p>temperature is hot.</p>";}

   ?>
</body>
</html>