<?php  
	session_start();
	require_once ('includes/init.php');
	require_once ('includes/user.php');
	$user = new User();
	$uid = $_SESSION['uid'];
	if (!$user->get_session()){
	header("location:login.php");
	exit();
	}
	if (isset($_GET['q'])){
	$user->user_logout();
	header("location:login.php");
	exit();
	}
?>
<h1>טבלת מובילים</h1>