<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
    <?php
    	include_once("_includes/recaptchalib.php");
		
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
 	<?php
	  if ($response != null && $response->success) {
	    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
	  } else {
	?>
 
    <form action="" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
      <div class="g-recaptcha" data-sitekey="6LdzOh8TAAAAAPIny64Drz1sUlNYGhaYmU2WhHsY"></div>
 
      <input type="submit" value="Submit" />
 
    </form>
 	<?php } ?>
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>