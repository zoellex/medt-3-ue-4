<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <title>Bootstrap</title>

  <style>
  .wrapper{
    background-color: lightgray;
    width: 60%;
    height: auto;
    border-radius: 15px;
    margin-left: 5px;
    margin-top: 10px;
    padding: 15px;
    padding-top: 5px;
  }
  .inside{
    background-color: lightblue;
    width: 30%;
    height: 50%;
    border-radius: 15px;
    margin-left: 5px;
    margin-top: 15px;
    padding: 15px;
  }
  </style>

</head>
<body>

<div class="wrapper">

<h3><ins>Anmeldeinfos bitte eingeben:</ins></h3>

  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
    <label>Vorname:</label>
    <input class="form-control" name="vn" type="text">
  </div>

  <div class="form-group">
    <label>Nachname:</label>
    <input class="form-control" name="nn" type="text">
  </div>

  <div class="form-group">
    <label for="email">E-Mail:</label>
    <input type="email" class="form-control" name="email" type="text">
  </div>

  <button type="submit" class="btn btn-default btn-lg active" name="submitBTN">Submit</button>
  </form>

</div>

<div class="inside">
  <h4><ins>Ihre Eingabe:</ins></h4>

  <?php
  if(isset($_GET['submitBTN']))
  {
    echo "<p><strong>Vorname:</strong> ".$_GET['vn']."<br>";
    echo "<p><strong>Nachname:</strong> ".$_GET['nn']."</p>";
    echo "<p><strong>E-Mail:</strong> ".$_GET['email']."</p>";
  }
  ?>
</div>

</body>
</html>