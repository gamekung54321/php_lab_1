<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP pi() Function</h3>
    <?php
        echo(pi());
    ?>
    <h3>PHP min() and max() Functions</h3>
    <?php
        echo(min(0, 150, 30, 20, -8, -200) . "<br>");
        echo(max(0, 150, 30, 20, -8, -200));
    ?>
    <h3>PHP abs() Function</h3>
    <?php
        echo(abs(-6.7));
    ?>
    <h3>PHP sqrt() Function</h3>
    <?php
        echo(sqrt(64) . "<br>");
        echo(sqrt(0) . "<br>");
        echo(sqrt(1) . "<br>");
        echo(sqrt(9));
    ?>
    <h3>PHP round() Function</h3>
    <?php
        echo(round(0.60) . "<br>");
        echo(round(0.50) . "<br>");
        echo(round(0.49) . "<br>");
        echo(round(-4.40) . "<br>");
        echo(round(-4.60));
    ?>
    <h3>Random Numbers</h3>
    <?php   
        echo(rand());
    ?>
    <br>
    <?php
        echo(rand(10, 100));
    ?>
</body>
</html>