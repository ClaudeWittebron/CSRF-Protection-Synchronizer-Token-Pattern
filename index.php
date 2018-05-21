<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
</head>
<style media="screen">
  #error{display: none;}
</style>

<body background="metal.jpg" style="background-position: center;background-repeat: no-repeat;">
<?php
  if(!isset($_COOKIE['cookie_name']))
  {
    require_once('functionInvoke.php');
    showGeneral();
  }
?>
<?php
  if(isset($_COOKIE['cookie_name'])){
    require_once('functionInvoke.php');
    showLoggedIn();
  }
?>

</body>
</html>

<?php
	if(isset($_POST['submit'])){
    require_once('validate.php');
    login();
    //generate token
    
	}
?>


