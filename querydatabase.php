<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
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
        <div class="row">
        <div class="col-lg-12">
        <a href="insertdata.php" class="btn btn-primary">เพิ่ม</a>
        <button value="1" type="submit" class="btn btn-success" name="sb">ค้นหา</button>
        </div>
        </div>
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
      <th scope="col">Deletion</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        error_reporting(0);
        include('conn.php');
            $i = 0;
            $sql = "select * from car_sale where car LIKE '%$_GET[Cel]%' ";
            $exeq = mysqli_query($conn , $sql);
            while ($row = mysqli_fetch_assoc($exeq)) {
                $i+=1;
                $qu = $_GET['Cel'];
                $car = $row["car"];
                $price = $row["price"];
                $model = $row["model"];
                echo '<tr>';
                echo '<th scope="row">'.$i.'</th>';
                echo '<td>'.$car.'</td>';
                echo '<td>'.$price.'</td>';
                echo '<td>'.$model.'</td>';
                echo '<td>'.'<a href=delete.php?car='.$car.'&price='.$price.'&qu='.$qu.'target="_blank" class="btn btn-danger" > <i class="fas fa-trash-alt"> </i> Delete</a>'.'</td>';
                echo '</tr>';
            }
    ?>
  </tbody>
</table>

</div>

</body>
</html>