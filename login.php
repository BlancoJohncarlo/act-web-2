<?php
session_start();
$username = "John Carlo";
$password = "Blanco";

$adminusername= "admin";
$adminpassword = "password";

if ($username === $_POST['username'] && $password === $_POST['password']){
	$_SESSION['loginname'] =$_POST['username'];
	$_SESSION['login'] = true;
	header("location: profile.php");
}
else if($adminusername ===$_POST['username'] && $adminpassword === $_POST['password']){
	$_SESSION['loginname'] = $_POST['username'];
	$_SESSION['login'] = true;
	header("location: profile.php");
}
else{
echo "Invalid password";
}


?>