<?php require_once("_includes/session.php")?>
<?php //session_unset(); session_destroy(); ?>
<?php require_once("_includes/constants.php")?>
<?php require_once("_includes/functions.php")?>
<?php error_reporting(0) ?>
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

<?php
	/********************** I M A G E S   u p l o a d *************************/
	/*Upload slike 1*/
			$imgName = $_FILES['img1']['name']; 
			$imgSize = $_FILES['img1']['size'];
			$imgLocation = $_FILES['img1']['tmp_name'];
			$imgType = $_FILES['img1']['type'];
			$id = $_GET['tour'];
			
	if(($imgType == 'image/jpeg') || ($imgType == 'image/jpg')){
			/*testing if image exists in sql*/
			$query = "SELECT img1 FROM Tours WHERE img1 = '{$imgName}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result) > 0){
					//file exists
					$imgMessage = "<p class=\"messageNegation\">Slika vec postoji na stranici. Promijenite naziv slike.</p>";
			}else{
				/*deletion of pevious image*/
				$query = "SELECT img1 FROM Tours WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
				if($ex_img = mysqli_fetch_array($result)){
					unlink("_images/uploaded_images/" . $ex_img['img1']);
				}
				/*image update*/						
				$query = "UPDATE Tours SET img1 = '{$imgName}' WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
		
				if(move_uploaded_file($imgLocation, '_images/uploaded_images/'.$imgName)){
					//success
					$imgMessage = "<p class=\"messageAffirmation\">Uspješno ste postavili sliku</p>";
				}else{
					$imgMessage = "<p class=\"messageNegation\">Greška na stranici, kontaktirajte web dizajnera</p>";
				}
			}
	}else{
		$imgMessage = "<p class=\"messageNegation\">Slika mora biti u .jpg formatu!</p>";
	}
	
	
	
/*Upload slike 2*/
			$imgName = $_FILES['img2']['name']; 
			$imgSize = $_FILES['img2']['size'];
			$imgLocation = $_FILES['img2']['tmp_name'];
			$imgType = $_FILES['img2']['type'];
			$id = $_GET['tour'];
			
	if(($imgType == 'image/jpeg') || ($imgType == 'image/jpg')){
			/*testing if image exists in sql*/
			$query = "SELECT img2 FROM Tours WHERE img2 = '{$imgName}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result) > 0){
					//file exists
					$imgMessage = "<p class=\"messageNegation\">Slika vec postoji na stranici. Promijenite naziv slike.</p>";
			}else{
				/*deletion of pevious image*/
				$query = "SELECT img2 FROM Tours WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
				if($ex_img = mysqli_fetch_array($result)){
					unlink("_images/uploaded_images/" . $ex_img['img2']);
				}
				/*image update*/						
				$query = "UPDATE Tours SET img2 = '{$imgName}' WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
		
				if(move_uploaded_file($imgLocation, '_images/uploaded_images/'.$imgName)){
					//success
					$imgMessage = "<p class=\"messageAffirmation\">Uspješno ste postavili sliku</p>";
				}else{
					$imgMessage = "<p class=\"messageNegation\">Greška na stranici, kontaktirajte web dizajnera</p>";
				}
			}
	}else{
		$imgMessage = "<p class=\"messageNegation\">Slika mora biti u .jpg formatu!</p>";
	}


/*Upload slike 3*/
			$imgName = $_FILES['img3']['name']; 
			$imgSize = $_FILES['img3']['size'];
			$imgLocation = $_FILES['img3']['tmp_name'];
			$imgType = $_FILES['img3']['type'];
			$id = $_GET['tour'];
			
	if(($imgType == 'image/jpeg') || ($imgType == 'image/jpg')){
			/*testing if image exists in sql*/
			$query = "SELECT img3 FROM Tours WHERE img3 = '{$imgName}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result) > 0){
					//file exists
					$imgMessage = "<p class=\"messageNegation\">Slika vec postoji na stranici. Promijenite naziv slike.</p>";
			}else{
				/*deletion of pevious image*/
				$query = "SELECT img3 FROM Tours WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
					if($ex_img = mysqli_fetch_array($result)){
							unlink("_images/uploaded_images/" . $ex_img['img3']);				
					}
				/*image update*/						
				$query = "UPDATE Tours SET img3 = '{$imgName}' WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
		
				if(move_uploaded_file($imgLocation, '_images/uploaded_images/'.$imgName)){
					//success
					$imgMessage = "<p class=\"messageAffirmation\">Uspješno ste postavili sliku</p>";
				}else{
					$imgMessage = "<p class=\"messageNegation\">Greška na stranici, kontaktirajte web dizajnera</p>";
				}
			}
	}else{
		$imgMessage = "<p class=\"messageNegation\">Slika mora biti u .jpg formatu!</p>";
	}
	
	/*Upload slike 4*/
			$imgName = $_FILES['img4']['name']; 
			$imgSize = $_FILES['img4']['size'];
			$imgLocation = $_FILES['img4']['tmp_name'];
			$imgType = $_FILES['img4']['type'];
			$id = $_GET['tour'];
			
	if(($imgType == 'image/jpeg') || ($imgType == 'image/jpg')){
			/*testing if image exists in sql*/
			$query = "SELECT img4 FROM Tours WHERE img4 = '{$imgName}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result) > 0){
					//file exists
					$imgMessage = "<p class=\"messageNegation\">Slika vec postoji na stranici. Promijenite naziv slike.</p>";
			}else{
				/*deletion of pevious image*/
				$query = "SELECT img4 FROM Tours WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
				if($ex_img = mysqli_fetch_array($result)){
					unlink("_images/uploaded_images/" . $ex_img['img4']);
				}
				/*image update*/						
				$query = "UPDATE Tours SET img4 = '{$imgName}' WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
		
				if(move_uploaded_file($imgLocation, '_images/uploaded_images/'.$imgName)){
					//success
					$imgMessage = "<p class=\"messageAffirmation\">Uspješno ste postavili sliku</p>";
				}else{
					$imgMessage = "<p class=\"messageNegation\">Greška na stranici, kontaktirajte web dizajnera</p>";
				}
			}
	}else{
		$imgMessage = "<p class=\"messageNegation\">Slika mora biti u .jpg formatu!</p>";
	}
	
	/*Upload slike 5*/
			$imgName = $_FILES['img5']['name']; 
			$imgSize = $_FILES['img5']['size'];
			$imgLocation = $_FILES['img5']['tmp_name'];
			$imgType = $_FILES['img5']['type'];
			$id = $_GET['tour'];
			
	if(($imgType == 'image/jpeg') || ($imgType == 'image/jpg')){
			/*testing if image exists in sql*/
			$query = "SELECT img5 FROM Tours WHERE img5 = '{$imgName}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result) > 0){
					//file exists
					$imgMessage = "<p class=\"messageNegation\">Slika vec postoji na stranici. Promijenite naziv slike.</p>";
			}else{
				/*deletion of pevious image*/
				$query = "SELECT img5 FROM Tours WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
				if($ex_img = mysqli_fetch_array($result)){
					unlink("_images/uploaded_images/" . $ex_img['img5']);
				}
				/*image update*/						
				$query = "UPDATE Tours SET img5 = '{$imgName}' WHERE id = {$id}";
				$result = mysqli_query($connection, $query);
		
				if(move_uploaded_file($imgLocation, '_images/uploaded_images/'.$imgName)){
					//success
					$imgMessage = "<p class=\"messageAffirmation\">Uspješno ste postavili sliku</p>";
				}else{
					$imgMessage = "<p class=\"messageNegation\">Greška na stranici, kontaktirajte web dizajnera</p>";
				}
			}
	}else{
		$imgMessage = "<p class=\"messageNegation\">Slika mora biti u .jpg formatu!</p>";
	}






	/********************** T O U R S    f o r m     p r o c e s s i n g *************************/
	if($_POST['submitTour']){
		//Form validation
		if(empty($_POST['heading'])){
			$error = "<p class=\"messageNegation\">Niste unjeli naslov, polje ne može biti prazno!</p>";
		}
		if(empty($_POST['content'])){
			$error .= "<p class=\"messageNegation\">Niste unjeli tekst za izlet. Polje ne smije biti prazno</p>";
		}
		
		if(!$error){	
			$heading = mysql_prep($_POST['heading']);
			$content = mysql_prep($_POST['content']);
		
			if($lang == 'en'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE Tours SET heading = '{$heading}', content = '{$content}' WHERE id={$_GET['tour']}";
			}elseif($lang == 'es'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE Tours SET heading_es = '{$heading}', content_es = '{$content}' WHERE id={$_GET['tour']}";
			}elseif($lang == 'po'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE Tours SET heading_po = '{$heading}', content_po = '{$content}' WHERE id={$_GET['tour']}";
			}
			
			
			
			
			if($result = mysqli_query($connection, $query)){
				$message = "<p class=\"messageAffirmation\">Uspješno ste promijenili tekst</p>";
			}else{
				$message_error = "<p class=\"messageNegation\">Failed!</p>";
			}	
		}else{			
			//SQL is not changed
		}
	}//end: if(isset($_POST'submit'))

	
	
	
	
	/***********************  A S I D E  1     f o r m     p r o c e s s i n g  *************************/
	
	if($_POST['submitAside1']){
		//Form validation

		if(empty($_POST['heading'])){
			$error = "<p class=\"messageNegation\">Niste unjeli naslov, polje ne može biti prazno!</p>";
		}
		if(empty($_POST['content'])){
			$error .= "<p class=\"messageNegation\">Niste unjeli tekst za izlet. Polje ne smije biti prazno</p>";
		}
		
		if(!$error){
			$heading = mysql_prep($_POST['heading']);
			$content = mysql_prep($_POST['content']);
		
			if($lang == 'en'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading = '{$heading}', content = '{$content}' WHERE id=2";
			}elseif($lang == 'es'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading_es = '{$heading}', content_es = '{$content}' WHERE id=2";
			}elseif($lang == 'po'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading_po = '{$heading}', content_po = '{$content}' WHERE id=2";
			}
			
			if($result = mysqli_query($connection, $query)){
				$message = "<p class=\"messageAffirmation\">Uspješno ste promijenili tekst</p>";	
			}else{
				$message_error = "<p class=\"messageNegation\">Failed!</p>";
			}	
		}else{			
			//SQL is not changed
		}
	}//end: if(isset($_POST'submit'))
	
	
	
	
	
	/***********************  A S I D E  2     f o r m     p r o c e s s i n g  *************************/
	
	if($_POST['submitAside2']){
		//Form validation
		if(empty($_POST['heading'])){
			$error = "<p class=\"messageNegation\">Niste unjeli naslov, polje ne može biti prazno!</p>";
		}
		if(empty($_POST['content'])){
			$error .= "<p class=\"messageNegation\">Niste unjeli tekst za izlet. Polje ne smije biti prazno</p>";
		}
		
		if(!$error){
			$heading = mysql_prep($_POST['heading']);
			$content = mysql_prep($_POST['content']);
		
			if($lang == 'en'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading = '{$heading}', content = '{$content}' WHERE id=3";
			}elseif($lang == 'es'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading_es = '{$heading}', content_es = '{$content}' WHERE id=3";
			}elseif($lang == 'po'){
				mysqli_set_charset($connection, 'utf8');
				$query ="UPDATE misc SET heading_po = '{$heading}', content_po = '{$content}' WHERE id=3";
			}
		
			if($result = mysqli_query($connection, $query)){
				$message = "<p class=\"messageAffirmation\">Uspješno ste promijenili tekst</p>";
			}else{
				$message_error = "<p class=\"messageNegation\">Failed!</p>";
			}	
		}else{			
			//SQL is not changed
		}
	}//end: if(isset($_POST'submit'))
	
	
?>
<?php include_once("_includes/header_for_processing.php") ?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">



<!-- F O R M S------------------------------------------------------>	
	<?php
		$query = "SELECT * FROM Tours WHERE id = {$_GET['tour']}";
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_array($result)){
			if($lang=='en'){
				$heading = $row['heading'];
				$content = $row['content'];
			}elseif($lang=='es'){
				$heading = $row['heading_es'];
				$content = $row['content_es'];
			}elseif($lang=='po'){
				$heading = $row['heading_po'];
				$content = $row['content_po'];
			}
		}
		
	?>

	<form method="post" action="update.php?tour=<?php echo $_GET['tour']?>" name="tours" enctype="multipart/form-data">
		<p>Promijeni naslov izleta: <br>
			<input type="text" name="heading" value="<?php if(isset($heading)){echo $heading;}?>" size="30" />
		</p>	
		<p>Promijeni tekst izleta:<br>
		<textarea name="content" cols="80" rows="20"><?php if(isset($heading)){echo $content;}?></textarea>
		</p>	

		<p>Postavi do 5 slika za galeriju:<br><br>
		<img src="_images/uploaded_images/<?php img_preview('img1')	?>" class="imagePreview" />
		<input type="file" name="img1" /><?php delete_img('img1')?><br><br><br>
		<img src="_images/uploaded_images/<?php img_preview('img2')	?>" class="imagePreview" /> 
		<input type="file" name="img2" /><?php delete_img('img2')?><br><br><br>	
		<img src="_images/uploaded_images/<?php img_preview('img3')	?>" class="imagePreview" /> 
		<input type="file" name="img3" /><?php delete_img('img3')?><br><br><br>
		<img src="_images/uploaded_images/<?php img_preview('img4')	?>" class="imagePreview" />	
		<input type="file" name="img4" /><?php delete_img('img4')?><br><br><br>	
		<img src="_images/uploaded_images/<?php img_preview('img5')	?>" class="imagePreview" />	
		<input type="file" name="img5" /><?php delete_img('img5')?><br><br><br>	
		</p>
		<?php
			if(isset($img_upload_message)){
				echo $img_upload_message;
			}
		?>
		<?php 
			if(isset($imgMessage)){
				print $imgMessage;
			} 
		
		?>

		<input type="submit" name="submitTour" value="Pohrani"/>
		<br><hr>
		<?php
		
		?>
		<?php
			if(isset($error)){
				echo $error;
			}
			if(isset($message)){
				echo $message;
			}elseif(isset($message_error)){
				echo $message_error;
			}
		?>

	</form>
	
<!------------- aside forms  ------------------->
	<aside>
		<p><a href="_staff/logout.php">LOGOUT</a></p>
		<p><a href="comments.php" style="color: rgb(0,135,81);">Guestbook komentari >></a></p>
			<?php
			$query = "SELECT * FROM misc WHERE id=2";
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result)){
				if($lang=='en'){
					$heading = $row['heading'];
					$content = $row['content'];
				}elseif($lang=='es'){
					$heading = $row['heading_es'];
					$content = $row['content_es'];
				}elseif($lang=='po'){
					$heading = $row['heading_po'];
					$content = $row['content_po'];
				}
			}
			?>
	<?php $tour_id = $_GET['tour']; ?>
	<form method="post" action="update.php?tour=<?php echo $tour_id; ?>" name="aside1">
			<input type="text" name="heading" size="15" value="<?php echo $heading;?>" />
			<textarea name="content" rows="12" cols="28"><?php print $content; ?></textarea>
			<input type="submit" name="submitAside1" value="Pohrani" />
	</form>
			<?php
			$query = "SELECT * FROM misc WHERE id=3";
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result)){
				if($lang=='en'){
					$heading = $row['heading'];
					$content = $row['content'];
				}elseif($lang=='es'){
					$heading = $row['heading_es'];
					$content = $row['content_es'];
				}elseif($lang=='po'){
					$heading = $row['heading_po'];
					$content = $row['content_po'];
				}
			}
			?>
			<hr><br>
	<?php $tour_id = $_GET['tour']; ?>
	<form method="post" action="update.php?tour=<?php echo $tour_id; ?>" name="aside2">
			<input type="text" name="heading" size="15" value="<?php echo $heading;?>" />
			<textarea name="content" rows="12" cols="28"><?php print $content; ?></textarea>
			<input type="submit" name="submitAside2" value="Pohrani" />
	</form>
	
</aside>	

</section>
<?php include_once("_includes/footer.php") ?>