 <?php
	include_once("../_includes/recaptchalib.php");
	
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
  
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@movimentum.hr";
 
    $email_subject = "Poruka poslana preko kontakt forme sa movimentum.hr stranice";
      
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['telephone']) || !isset($_POST['comments']) || !isset($_POST['g-recaptcha-response'])){
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
    
    $robotCheck = $_POST['g-recaptcha-response']; //required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
  
   if(!preg_match($string_exp,$robotCheck)) {
 
    $error_message .= 'You have to verify you are not a robot.<br />';
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

 if ($response != null && $response->success) {
	@mail($email_to, $email_subject, $email_message, $headers);
	echo "<p style=\"font-family: 'Raleway', sans-serif; color: rgb(0,135,81);\">Thank you for contacting us. We will be in touch with you very soon.</p>";
 }else{
 	echo "<p>You have not sent a message. In order to send a message you have to check 'I am not a robot' field.</p>";
 } 
 
?>
 
 
 
<!-- include your own success html here -->
 
 

<a href="http://www.movimentum.hr/contact.php" style="font-family: 'Raleway', sans-serif; color: rgb(0,135,81);"> << GO BACK</a>
 
 
 
<?php
 
}
 
?>
 <script src='https://www.google.com/recaptcha/api.js'></script>