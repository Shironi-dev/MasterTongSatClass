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
      <label>Degree in Celcius</label>
        <input name="Cel" class="form-control form-control-lg" placeholder="Celcius" type="text" required>
        </br>
        <button type="submit" class="btn btn-success">Fahrenheit</button>
      </form>
      <hr>
      <?php
      error_reporting(0);
          function ctof(){
          $f = 0.0;
          $f = number_format((1.8 * $_GET["Cel"]) + 32,2);
          echo '<div class="alert alert-success" role="alert">'.$_GET["Cel"].' C = '.$f.' F</div>';
          }
      if(isset($_GET["Cel"])) {
           ctof();
        }
?>
</div>
    </div>
</div>

</body>
</html>