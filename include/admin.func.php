<?php

function disablecache() {
	header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}

function zeropad($number, $limit) {
	return (strlen($number) >= $limit) ? $number : zeropad("0" . $number, $limit);
}

function random_session_num()
{
  $code = array();

  $code[] = chr(rand(ord("A"), ord("Z")));
  $code[] = chr(rand(ord("a"), ord("z")));
  $code[] = chr(rand(ord("A"), ord("Z")));
  $code[] = rand(0,9);
  $code[] = rand(0,9);
   $code[] = chr(rand(ord("A"), ord("Z")));
  $code[] = chr(rand(ord("a"), ord("z")));
  $code[] = chr(rand(ord("A"), ord("Z")));
  $code[] = rand(0,9);
  $code[] = chr(rand(ord("A"), ord("Z")));
  $code[] = chr(rand(ord("a"), ord("z")));
  $code[] = chr(rand(ord("A"), ord("Z")));

  shuffle($code);
  $c = implode("", $code);
  return strtoupper($c);
}

							
function login_user($email,$password,$role)
{
	$db_host= "localhost";
	$db_name= "pesamobieussd"; 
	$db_username = "root"; 
	$db_password = "90293269"; 

//open database connection
	$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);

	$query = mysqli_query($con,"select * from users where username='$email' and password='$password' and roleid='$role' and status=1");
	
	return $query;
	
}






?>