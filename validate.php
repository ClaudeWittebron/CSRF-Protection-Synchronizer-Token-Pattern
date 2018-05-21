<?php


  function login()
  {
    
    $username='admin.sliit@gmail.com';
    $passw='admin@cs2018sss';
    $input_user= $_POST['inputmail'];
    $input_passw= $_POST['inputpassw'];
    if(($username == $input_user) && ($passw ==$input_passw )){
      //set the cookie parameters
      session_set_cookie_params (3600);
      session_start();
      session_regenerate_id();
      //setting the cookie
      $cookiename="cookie_name";
      $sessionid=session_id();
      $time=time()+3600;
      setcookie($cookiename,$sessionid,$time,'/');

      //token
      $tempToken=  generateTokenId();
      $_SESSION['CSRF_token'] = $tempToken;
      echo  $tempToken;
      //load the page
      header('Location:profile.php');
     
      exit;
    } else{
      echo'<script> document.getElementById("error").style.display = "block";</script>';
    }
  }

  function generateTokenId(){
    //$tokenId =  crypt(base64_encode(openssl_random_pseudo_bytes(24)));
    $tokenId =hash_hmac('sha256',"Hi This is Claude",bin2hex(random_bytes(32)));
    return $tokenId; 
  }

  function validateFields(){
    
  }

 ?>