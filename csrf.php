<?php

session_start();
if(isset($_COOKIE['cookie_name']))
{
	$data=$_SESSION['CSRF_token'];
	echo $data;	
}
?>