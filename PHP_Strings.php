<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>strlen() - Return the Length of a String</h3>
    <?php
        echo strlen("Hello world!");
    ?> 
    <h3>str_word_count() - Count Words in a String</h3>
    <?php
        echo str_word_count("Hello world!");
    ?>
    <h3>strrev() - Reverse a String</h3>
    <?php
        echo strrev("Hello world!");
    ?>
    <h3>strpos() - Search For a Text Within a String</h3>
    <?php
        echo strpos("Hello world!", "world");
    ?> 
    <h3>str_replace() - Replace Text Within a String</h3>
    <?php
        echo str_replace("world", "Dolly", "Hello world!");
    ?> 
</body>
</html>