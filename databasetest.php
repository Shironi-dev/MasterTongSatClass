<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database test</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname = "car";
        $conn = mysqli_connect($servername , $username , $password, $dbname);
        if(!($conn)) {
            die("connection failed : ".mysqli_connec_error);
        }
        else {
            echo "connection DONE!";
        }
        echo "</br>";
        $sql = "select * from car_sale where car = 'toyota' ";
        $exeq = mysqli_query($conn , $sql);
        while ($row = mysqli_fetch_assoc($exeq)) {            
            $car = $row["car"];
            $price = $row["price"];
            echo "$car : $price </br>";
        }
    ?>
</body>
</html>