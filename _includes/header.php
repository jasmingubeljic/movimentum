<? ob_start("ob_gzhandler"); ?><?php error_reporting(0); ?>
<?php require_once("constants.php")?>
<?php require_once("functions.php")?>
<?php /*  remove this function before setting page to the right server*/ //php_error() ?>

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
<!--<link href='https://fonts.googleapis.com/css?family=Nothing+You+Could+Do&subset=latin2,latin-ext' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,500&subset=all,latin-ext' rel='stylesheet' type='text/css'>
<link href="_styles/lightbox.css" rel="stylesheet">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon">
<link rel="icon" href="_images/favicon.ico" type="image/x-icon">
	<title>Movimentum | Best Croatia Tours</title>
	<meta name="description" content="MOVIMENTUM; Guided Tours"/>
	<meta name="keywords" content="Tours, tourism, zagreb, croatia, izleti, ekskurzije, excursions" />
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
		<a href="index.php"><img id="logo" src="_images/logo.png" alt="Movimentum logo" align="center"/></a>
		<a href="index.php"><img id="logoText" src="_images/logo_text.png" alt="Movimentum logo" align="middle"/></a>		
		<section id="languages">
			<a href="_staff/lang_en.php"><img src="_images/english_flag.png" alt="Movimentum language" /></a>
			<a href="_staff/lang_es.php"><img src="_images/spanish_flag.png" alt="Movimentum language" /></a>
			<a href="_staff/lang_po.php"><img src="_images/portuguese_flag.png" alt="Movimentum language" /></a>
		</section>
		<nav>
			<?php include_once("_includes/navigation.php")?>
		</nav>
		
		<section id="m_navigation" class="cf">
			<ul>
				<li><a><img src="_images/language_icon.png" alt="Movimentum language" /></a>
					<ul id="m_submenu">
						<li><a href="_staff/lang_en.php"><img src="_images/english_flag.png" alt="Movimentum language" /></a></li>
						<li><a href="_staff/lang_es.php"><img src="_images/spanish_flag.png" alt="Movimentum language" /></a></li>
						<li><a href="_staff/lang_po.php"><img src="_images/portuguese_flag.png" alt="Movimentum language" /></a></li>
					</ul>
				</li>
				<li><a href="tel: +38598786159"><img src="_images/contact_icon.png" alt="Contact Movimentum" /></a></li>
				<li><a><img src="_images/menu_icon.png" alt="Movimentum tours menu" /></a>
					<ul id="m_submenu_2">
						<?php
							mysqli_set_charset($connection, 'utf8');
							$query = "SELECT * FROM Tours";
								$result = mysqli_query($connection, $query);
								echo "<ul>";
								while($row = mysqli_fetch_array($result)){
									if($row['id']==8){
											$style = "style=\"color: #ed3323; text-transform: uppercase\"";
									}	
									if($lang == 'en'){																
										echo "<li><a href=\"tours.php?tour={$row['id']}\"" .$style. ">".$row['heading']."</a></li>";
									}elseif($lang == 'es'){
										echo "<li><a href=\"tours.php?tour={$row['id']}\"" .$style. ">".$row['heading_es']."</a></li>";
									}elseif($lang == 'po'){
										echo "<li><a href=\"tours.php?tour={$row['id']}\"" .$style. ">".$row['heading_po']."</a></li>";
									}																												
								}
								echo "<li><a href=\"contact.php\" style=\"color: #ed3323\">CONTACT</a></li>";	
								echo "</ul>";
						?>
		
					</ul>
				</li>
			</ul>
		</section>
	</header>