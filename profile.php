<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
    <title>Document</title>
    <style>
        #logout{float:'right'};
    </style>
    <script type="text/javascript" src="config.js"> </script>
</head>
<body background="bg2.png"style="background-position: right;background-repeat: no-repeat;">
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
            echo"<ul class='nav nav-pills'><li class='nav-item' id='logout' >
                    <a class='nav-link' href='logout.php'> <button type='button' class='btn btn-success btn-sm'>Logout</button> </a>
                 </li></ul>";
                
        };
      ?>
  </div>
</nav>
    <?php
        if(isset($_COOKIE['cookie_name'])){
            echo"
            <div class='card border-primary mb-3' style='max-width: 25rem; margin:0 auto;'>
            <div class='card-header'></div>
            <div class='card-body'>
              <h4 class='card-title'>Admin Registration Information</h4>
              <p class='card-text'>Hi Mr Admin, Please enter your name and Other Information as required inorder to proceed with the registration for Premium Services</p>
              
              <form action='display.php' method='POST' enctype='multipart/form-data'>
              <fieldset>
              <!-- CSRF Token -->
                <input type='hidden' name='csrf_Token' id='csrf_Token' value=''>   
              <!--  -->
              <div class='form-group'>
                  <select name='title' class='custom-select' style='max-width: 5rem;'>
                      <option selected=''>Title</option>
                      <option value='1'>Mr</option>
                      <option value='2'>Mrs</option>
                      <option value='3'>Miss</option>
                  </select>
                  </br>
                  <label class='col-form-label col-form-label-sm' for='inputSmall'>Name</label>
                  <input name='name' class='form-control form-control-sm' placeholder='Name' id='inputSmall' type='text'>
                  <label class='col-form-label col-form-label-sm' for='inputSmall'>Designation</label>
                  <input name='designation' class='form-control form-control-sm' placeholder='Designation' id='inputSmall' type='text'>
                  <label class='col-form-label col-form-label-sm' for='inputSmall'>NIC</label>
                  <input name='nic' class='form-control form-control-sm' placeholder='Natinal Identity Card Number' id='inputSmall' type='text'>
              </div>
          
              <div class='form-group'>
              <label class='control-label'>Donation Amount</label>
              <div class='form-group'>
                  <div class='input-group mb-3'>
                      <div class='input-group-prepend'>
                          <span class='input-group-text'>$</span>
                      </div>
                      <input name='amount' class='form-control' aria-label='Amount (to the nearest dollar)' type='text'>
                  <div class='input-group-append'>
                  <span class='input-group-text'>.00</span>
                </div>
              </div>
              <button type='submit' class='btn btn-success btn-sm' name='register'>Register</button>
              <button type='reset' value='reset' class='btn btn-danger btn-sm'>Reset</button>
            </div>
            <fieldset>
            </form>
          </div>
          </div>
          </div>";
        }
        echo"<script> var token = loadDOC('POST','csrf.php','csrf_Token');  </script>";
    ?>
  

</body>
</html>