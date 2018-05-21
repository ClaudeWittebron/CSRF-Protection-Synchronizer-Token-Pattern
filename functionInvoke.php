<?php
function showGeneral(){
    echo"<div class='card text-white bg-dark mb-3' style='max-width: 80rem; margin:0 auto;'>
    <div class='card-body'>
      <h4 class='card-title'>Login To Create Your Own Session</h4>
      <div class='form-group row'>
        <label for='staticEmail' class='col-sm-2 col-form-label'>Email for Login:</label>
        <div class='col-sm-10'>
          <input readonly='' class='form-control-plaintext' id='staticEmail' value='admin.sliit@gmail.com' type='text'>
        </div>
        <label for='staticPassword' class='col-sm-2 col-form-label'>Password for Login:</label>
        <div class='col-sm-10'>
          <input readonly='' class='form-control-plaintext' id='staticEmail' value='admin@cs2018sss' type='text'>
        </div>  
      </div>
    </div>
  </div>
  
  <form action='index.php' method='POST' enctype='multipart/form-data'>
    <fieldset> 
      <div class='card border-primary mb-3' style='max-width: 22rem;  margin:0 auto;'>
          <div class='card-header'>Sign In</div>
          <div class='card-body'>
              <h4 class='card-title'>Login with Credentials</h4>
              <p class='card-text'>You may use the above provided username and password for the login.</p>
  
              <div class='form-group'>
                <label for='exampleInputEmail1'>Email address</label>
                <input class='form-control' id='inputmail' name='inputmail' aria-describedby='emailHelp' placeholder='Enter email' type=' ' max-width: 20rem;>
                <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
              </div>
              <div class='form-group'>
                <label for='exampleInputPassword1'>Password</label>
                <input class='form-control' id='inputpassw' name='inputpassw' placeholder='Password' type='password' max-width: 20rem;>
              </div>
  
              <button name='submit' type='submit' class='btn btn-primary'>Submit</button>
              <span id='error' class='badge badge-danger'>Please Input the Correct email and Password.</span>
          </div>
      </div>
    </fieldset>
  </form>";
}

function showLoggedIn(){
    echo"<div class='progress'>
    <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: 100%'></div>
  </div>
  <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <a class='navbar-brand' href='#'>Welcome</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor02' aria-controls='navbarColor02' aria-expanded='false' aria-label='Toggle navigation' style=''>
      <span class='navbar-toggler-icon'></span>
    </button>
  
    <div class='collapse navbar-collapse' id='navbarColor02'>
      <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
          <a class='nav-link' href='profile.php'> <button type='button' class='btn btn-success'>Profile</button></a>
        </li>
       
      </ul>
      <a class='nav-link' href='logout.php'> <button type='button' class='btn btn-danger'>Logout</button> </a>
      
    </div>
  </nav>";
  };

  function showUltimate($title,$user,$desig,$nic,$amt){
    echo "<div class='card border-dark mb-3' style='max-width: 25rem;margin:0 auto;'>";
    echo "  <div class='card-header'></div>";
    echo "  <div class='card-body'>";
    echo "    <h4 class='card-title'>Hi" .$title. " ".$user. "</h4>";
    echo "    <p class='card-text'>Thank You for the Contribution, You are welcome to the Premium Services afford by D.Claude</p>";
    echo "    <p class='text-success'>Thank you for the amazing" .$amt. "Dollars, given under a designation of" .$desig. " </p>";
    echo "    <p class='text-info'>Your NIC:" .$nic. "is recorded in our database</p>";
    echo "  </div>";
    echo "</div>";
  }

?>