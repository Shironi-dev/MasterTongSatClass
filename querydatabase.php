<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container">
<h1>การค้นหาข้อมูลใน Database</h1>
<div class="panel panel-primary">
      <div class="panel-heading">กรอกข้อมูลทีต้องการค้นหา</div>
      <div class="panel-body">
      <form name="CTF" method="GET" action="">
      <label>ข้อมูลที่ต้องการค้นหา</label>
        <input name="Cel" class="form-control form-control-lg" placeholder="Brand" type="text" required>
        </br>
        <button type="submit" class="btn btn-success">ค้นหา</button>
      </form>
      <hr>

</div>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Model</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        error_reporting(0);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "car";
        if (isset($_GET["Cel"])) {
            $conn = mysqli_connect($servername , $username , $password , $dbname);
            if(!($conn)) {
                echo '<div class="alert alert-danger" role="alert">'.'Connection Error!'.'</div>';
            }
            else {
                echo '<div class="alert alert-success" role="alert">'.'Connection Success!'.'</div>';
            }
            $i = 0;
            $sql = "select * from car_sale where car LIKE '%$_GET[Cel]%' ";
            $exeq = mysqli_query($conn , $sql);
            while ($row = mysqli_fetch_assoc($exeq)) {
                $i+=1;
                $car = $row["car"];
                $price = $row["price"];
                $model = $row["model"];
                echo '<tr>';
                echo '<th scope="row">'.$i.'</th>';
                echo '<td>'.$car.'</td>';
                echo '<td>'.$price.'</td>';
                echo '<td>'.$model.'</td>';
                echo '</tr>';
            }
        }
    ?>
  </tbody>
</table>

</div>

</body>
</html>