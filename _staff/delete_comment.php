<?php session_start(); ?>
<?php require_once("../_includes/functions.php")?>
<?php 
	if(!isset($_SESSION['user_id'])){
		redirect_to("../login.php");
		exit();
	}
?>
<?php require_once("../_includes/constants.php")?>
<?php php_error(); ?>
<?php
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(!$connection){
		die("Database connection failed: ". mysqli_error());
	}
	
?>
<?php
	if(isset($_GET['comment'])){
		$comment = $_GET['comment'];
		$query = "DELETE FROM guestbook WHERE id={$comment} LIMIT 1";
		if(mysqli_query($connection, $query)){
			echo "<p>Comment deleted</p>";
			redirect_to("../comments.php");
		}
	}else{
		redirect_to("../comments.php");
	}
	
	
?>
