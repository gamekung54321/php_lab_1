<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Create a PHP Constant</h3>
    <?php
        // case-sensitive constant name
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
    ?>
    <br>
    <h3>PHP Constant Arrays</h3>
    <?php
        define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
        ]);
        echo cars[0];
    ?> 
    <h3>Constants are Global</h3>
    <?php
        define("GREET", "Welcome to W3Schools.com!");
        function myTest() {
        echo GREET;
        }
        myTest();
    ?> 
</body>
</html>