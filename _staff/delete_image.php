<?php session_start(); ?>
<?php require_once("../_includes/constants.php")?>
<?php require_once("../_includes/functions.php")?>
<?php 
	if(!isset($_SESSION['user_id'])){
		redirect_to("../login.php");
		exit();
	}
?>
<?php
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(!$connection){
		die("Database connection failed: ". mysqli_error());
	}
?>


<?php
	$image = $_GET['img'];
	$id = $_GET['tour'];
	
	$query = "SELECT {$image} FROM Tours WHERE id = {$id}";
	$result = mysqli_query($connection, $query);
	if($row = mysqli_fetch_array($result)){
		unlink("../_images/uploaded_images/".$row[$image]);

	}
	
	
	$query = "UPDATE Tours SET {$image} = '' WHERE id = {$id}";
	$result = mysqli_query($connection, $query);
	if($result){
		redirect_to("../update.php?tour=".$id);
	}
	
?>


<?php
	if($connection){
		mysqli_close($connection);
	}
?>