<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container">
<h1>Insert data</h1>
<div class="panel panel-primary">
      <div class="panel-heading">Insert data</div>
      <div class="panel-body">
      <form name="CTF" method="POST" action="data_save.php">
      <label>Car</label>
        <input name="car" class="form-control form-control-lg" placeholder="Car" type="text" required>
        <label>Price</label>
        <input name="price" class="form-control form-control-lg" placeholder="Price" type="text" required>
        <label>Body</label>
        <input name="body" class="form-control form-control-lg" placeholder="Body" type="text" required>
        </br>
        <button type="submit" class="btn btn-success">Add!</button>
      </form>
      <hr>

</div>
    </div>
</div>

</body>
</html>