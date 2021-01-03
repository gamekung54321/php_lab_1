<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Integers</h3>
    <?php
        // Check if the type of a variable is integer   
        $x = 5985;
        var_dump(is_int($x));

        echo "<br>";

        // Check again... 
        $x = 59.85;
        var_dump(is_int($x));
    ?>  
    <h3>PHP Floats</h3>
    <?php
        // Check if the type of a variable is float 
        $x = 10.365;
        var_dump(is_float($x));
    ?>  
    <h3>PHP Infinity</h3>
    <?php
        // Check if a numeric value is finite or infinite 
        $x = 1.9e411;
        var_dump($x);
    ?>  
    <h3>PHP NaN</h3>
    <?php
        // Invalid calculation will return a NaN value
        $x = acos(8);
        var_dump($x);
    ?>
    <h3>PHP Numerical Strings</h3>
    <?php
        // Check if the variable is numeric   
        $x = 5985;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "5985";
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "59.85" + 100;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x));
    ?>  
    <h3>PHP Casting Strings and Floats to Integers</h3>
    <?php
        // Cast float to int 
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        
        echo "<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;
    ?>  
</body>
</html>