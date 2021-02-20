<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";
    $conn = mysqli_connect($servername , $username , $password , $dbname);
    if(!($conn)) {
        echo '<div class="alert alert-danger" role="alert">'.'Connection Error!'.'</div>';
    }
    else {
        echo '<div class="alert alert-success" role="alert">'.'Connection Success!'.'</div>';
    }
    $i = 0;
    $sql = "DELETE FROM car_sale WHERE car = '$_GET[car]' and price = '$_GET[price]'";
    $exeq = mysqli_query($conn , $sql);
    if($exeq) {
        echo "DELETED";
    }
    else {
        echo "CANNOT BE DELETED";
    }
?>

</body>
<script>
location.replace("querydatabase.php?");00
</script>
</html>