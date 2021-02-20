<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled document</title>
</head>
<body>
<?php
    $num = 0;
    $str = "This is a string";
    $numf = 1.5;
    function ex1() {
        $x = 5;
        echo"Result : $x ";
        echo"</br>";
    }
    function ex2() {
        define("pi",3.14566);
        static $num = 0;
        $num-=-1;
        echo"Result : $num <br>";
        
        echo pi;
    }
    ex1();
    ex2();
    ?>
</body>
</html>
