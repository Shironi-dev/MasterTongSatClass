<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<body>
<form name = "myform" method = "POST">
    <input type="text" name="arr[]" value="001"></br>
    <input type="text" name="arr[]" value="002"></br>
    <input type="text" name="arr[]" value="003"></br>
    <input type="text" name="arr[]" value="004"></br>
    <input type="text" name="arr[]" value="005"></br>
    <?php
        for($k=0 ; $k < 10 ; $k++) {
            echo '<input type="text" name="arr2[]" value="001"></br>';
        }
    ?>
    <input type="submit" name="submit" value="submit">
</form>
    <?php
    error_reporting(0);
    $a = $_POST["arr2"];
    if(null !== $a) {
        foreach($a as $b) {
            echo $b."</br>";
        }
    }
    echo count($a);
    echo "</br>";
    for($i = 0 ; $i < count($_POST['arr']) ; $i++) {
        echo $_POST['arr'][$i]."</br>";
    }
    ?>
</body>
</html>