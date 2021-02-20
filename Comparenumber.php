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
<h1>Celcius to Fahrenheit Calculator</h1>
<div class="panel panel-primary">
      <div class="panel-heading">C to F</div>
      <div class="panel-body">
      <form name="CTF" method="GET" action="">
      <label>ตัวเลขตัวที่ 1</label>
        <input name="n1" class="form-control form-control-lg" placeholder="ตัวเลขตัวที่ 1" type="text" required>
        </br>
        <label>ตัวเลขตัวที่ 2</label>
        <input name="n2" class="form-control form-control-lg" placeholder="ตัวเลขตัวที่ 2" type="text" required>
        </br>
        <button type="submit" class="btn btn-success">คำนวณ</button>
      </form>
      <hr>
      <?php
      error_reporting(0);
          function ctof(){
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            echo '<div class="alert alert-success" role="alert">'.(($n1 > $n2)? 'ตัวแรกมากกว่าไป '.($n1-$n2): 'ตัวแรกน้อยกว่าไป '.($n2-$n1)).'</div>';
          }
      if(isset($_GET["n1"]) && isset($_GET["n2"] )) {
           ctof();
        }
?>
</div>
    </div>
</div>

</body>
</html>