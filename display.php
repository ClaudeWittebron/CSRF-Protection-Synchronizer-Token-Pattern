<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://cyberdcblog.wordpress.com/">Blog <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <?php
        if(isset($_COOKIE['cookie_name'])){
            require_once('functionInvoke.php');
            echo"<ul class='nav nav-pills'><li class='nav-item' id='logout' >
                    <a class='nav-link' href='logout.php'> <button type='button' class='btn btn-success btn-sm'>Logout</button> </a>
                 </li></ul>";
        };
      ?>
  </div>
</nav>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        if($_POST['csrf_Token'] == $_SESSION['CSRF_token']){
            $title = $_POST['title'];
            $name = $_POST['name'];
            $designation =$_POST['designation'];
            $nic = $_POST['nic'];
            $amount = $_POST['amount'];
            require_once('functionInvoke.php');
            showUltimate($title,$name,$designation,$nic,$amount);
        } else {
            echo "<div class='alert alert-dismissible alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Oh snap!</strong> <a href='profile.php' class='alert-link'>Please come back through Profile</a> and try submitting again.
          </div>";
        }   
    
    ?>



</body>
</html>