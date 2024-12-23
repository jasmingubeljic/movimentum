<?php session_start()?>
<?php require_once("_includes/functions.php")?>
<?php require_once("_includes/constants.php")?>
<?php require_once("_includes/functions.php")?>
<?php
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(!$connection){
		die("Database connection failed: ". mysqli_error());
	}
	
	if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}else{
		$lang = "en";
	}
?>


<?php require_once("_includes/header_for_processing.php"); ?>
<?php 
//Validation

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result)){
		$username_sql = $row['username'];
		$password_sql = $row['password'];
		$id_sql = $row['id'];
	}
	
	if(($username == $username_sql) && ($password == $password_sql) && ($response != null && $response->success)){
		$_SESSION['user_id'] = $id_sql;
		$_SESSION['username'] = $username_sql;
		redirect_to("update.php?tour=1");
	}
}else{
	$username = "";
	$password = "";
}

?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">

<h1>Login stranica</h1>
<form method="post" action="login.php">
	<p>Korisničko ime:<br>
	<input type="text" name="username" value=""  />
	</p>
	<p>Lozinka:<br>
	<input type="password" name="password" value="" />
	</p>
	<p>
	 <div class="g-recaptcha" data-sitekey="6LdzOh8TAAAAAPIny64Drz1sUlNYGhaYmU2WhHsY"></div>	
	</p>
	 <p>
	<input type="submit" name="submit" value="Potvrdi" />
	<a href="index.php"><br><br><< POČETNA STRANICA</a>	
</form>

</section>

<?php include_once("_includes/footer.php") ?>