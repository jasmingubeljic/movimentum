<?php include_once("_includes/header.php") ?>

<?php
	//GUESTBOOK PROCESSING
	if($_POST['submit']){
		$name = mysql_prep($_POST['firstname']);
		$country = mysql_prep($_POST['country']);
		$comment = mysql_prep(nl2br($_POST['comments']));
		
		
		//Validation	
		if(empty($name)){
			$message = "<p style=\"color: #ed3323\">You must enter your name! Try again.</p>";
		}
		if(empty($country)){
			$message .= "<p style=\"color: #ed3323\">Country information is missing! Try again.</p>";
		}
		if(empty($comment)){
			$message .= "<p style=\"color: #ed3323\">You must fill the comment field! Try again.</p>";
		}

		if ($response != null && $response->success && ($response != null && $response->success)) {
		    //success
		    $query = "INSERT INTO `guestbook`(`name`, `country`, `comment`
					) VALUES (
					'{$name}', '{$country}', '{$comment}')";
				if(empty($message)){
					$result = mysqli_query($connection, $query);
					if(mysqli_affected_rows($connection) !== 0){
						$message .= "<p style=\"color: rgb(0,135,81)\">Thank you!</p>";	
					}
				}
		    
		 } else {
				$message .= "<p style=\"color: #ed3323\">Please, fill all fields</p>";
		 }
		 
		
	}//$_POST['submit']	
?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">
	<h1>Guestbook</h1>
	<form method="post" action="guestbook.php">
	 <p><?php subject_by_lang("Name", "Nombre", "Nome"); ?>:<br>
	 	<input type="text" name="firstname" size="30" />
	 </p>
	 <p><?php subject_by_lang("Country", "País", "País") ?><br>
	 	<input type="text" name="country" size="30" />
	 </p>
	 <p><?php subject_by_lang("Comments", "Comentarios", "Comentários") ?>:<br>
	 	<textarea type="text" name="comments" cols="70" rows="10" value=""></textarea>
	 		
	 </p>
	 <div class="g-recaptcha" data-sitekey="6LdzOh8TAAAAAPIny64Drz1sUlNYGhaYmU2WhHsY"></div>	
	 <p>
		<input type="submit" name="submit" value="<?php subject_by_lang("Send", "Enviar", "Enviar"); ?>" />
	</p>
	</form>
	<?php include_once("_includes/aside.php"); ?>
	
	<br style="float: left">
	<?php
	//message area
	
	if(isset($message)){
		echo $message;
	}
	?>
	
	
</section>
<?php include_once("_includes/footer.php") ?>