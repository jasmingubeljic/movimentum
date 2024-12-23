<?php require_once("constants.php")?>
<?php require_once("functions.php")?>
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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" /> 
<link rel="stylesheet" type="text/css" href="_styles/basic.css">
<link rel="stylesheet" type="text/css" href="_styles/m.basic.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,500&subset=all,latin-ext' rel='stylesheet' type='text/css'>

<link href="_styles/lightbox.css" rel="stylesheet">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<title>Movimentum</title>
	<script src="ckeditor/ckeditor.js"></script>
/*
<script src='https://www.google.com/recaptcha/api.js' async></script>
<?php
	include_once("recaptchalib.php");	
	// your secret key
	$secret = "6LdzOh8TAAAAAGxsoLQpa6FRw0IpMZQS9fwUoUZL";	 
	// empty response
	$response = null;	 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);	
	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
	    $response = $reCaptcha->verifyResponse(
	       $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}
?>
</head>

<body>

	
<header>
		<a href="_staff/logout.php"><img id="logo" src="_images/logo.png" alt="Movimentum logo" align="center"/></a>
		<a href="_staff/logout.php"><img id="logoText" src="_images/logo_text.png" alt="Movimentum logo" align="middle"/></a>		
		<section id="languages">
			<a href="_staff/lang_en_for_update.php?id=<?php echo $_GET['tour']?>"><img src="_images/english_flag.png" /></a>
			<a href="_staff/lang_es_for_update.php?id=<?php echo $_GET['tour']?>"><img src="_images/spanish_flag.png" /></a>
			<a href="_staff/lang_po_for_update.php?id=<?php echo $_GET['tour']?>"><img src="_images/portuguese_flag.png" /></a>
		</section>
		
		<nav>
			<ul>
				<?php 
					mysqli_set_charset($connection, 'utf8');
					$query = "SELECT * FROM Tours WHERE id=1";
					$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)){
						if($lang == 'en'){
							echo "<li><a href=\"update.php?tour=1\">{$row['heading']}</a></li>";
						}elseif($lang == 'es'){
							echo "<li><a href=\"update.php?tour=1\">{$row['heading_es']}</a></li>";
						}elseif($lang == 'po'){
							echo "<li><a href=\"update.php?tour=1\">{$row['heading_po']}</a></li>";
						}
					}
				?>
				<li><a href=""><?php subject_by_lang("One Day Excursions", "Excursiones", "Excursões"); ?></a>
					<ul class="submenu">
						<?php 
							mysqli_set_charset($connection, 'utf8');
							$query = "SELECT * FROM Tours WHERE id IN(2,3,4,5,6,7)";
							$result = mysqli_query($connection, $query);
							while($row = mysqli_fetch_array($result)){
								if($lang == 'en'){
									echo "<li><a href=\"update.php?tour={$row['id']}\">{$row['heading']}</a></li>";
								}elseif($lang == 'es'){
									echo "<li><a href=\"update.php?tour={$row['id']}\">{$row['heading_es']}</a></li>";
								}elseif($lang == 'po'){
									echo "<li><a href=\"update.php?tour={$row['id']}\">{$row['heading_po']}</a></li>";
								}		
							}
						?>
						
					</ul>
				</li>
				<!--<li><a href="about.php">About Me</a></li>-->
				<li><a href="update.php?tour=8"><?php header_tour(8)?></a></li>				
				<li><a href=""><?php subject_by_lang("Contact", "Contacto", "Contacto"); ?></a></li>
			</ul>
		</nav>
</header>