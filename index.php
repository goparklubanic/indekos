<?php
//error_reporting(0);
//$rootDir=$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME STAY MGMT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="./css/hsm.css">
 
</head>
<body>
  <div class='container-fluid'>
    <div class='row'>
    <h2>HOME STAY MANAGEMENT</h2>
    </div>
    <div class='row'>
      <div class='col-sm-2'>
        <?php include('nav.php'); ?>
      </div>
      <div class='col-sm-10'>
        <?php include("content.php"); ?>
      </div>
    </div>
  </div>
</body>
</html>
