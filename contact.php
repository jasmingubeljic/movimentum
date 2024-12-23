<?php include_once("_includes/header.php") ?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">
	<h1><?php subject_by_lang("Contact", "Contacto", "Contacto"); ?></h1>
	
	<form name="contactform" method="post" action="_scripts/send_email_form.php">
			  <p><label for="first_name"><?php subject_by_lang("First Name", "Nombre", "Nome"); ?> <span style="color: red; font-size: 1.5em">*</span></label></p>
			  <p><input  type="text" name="first_name" maxlength="50" size="30"></p>

			  <p><label for="last_name"><?php subject_by_lang("Last Name", "Apellido", "Apelido/Sobrenome"); ?> <span style="color: red; font-size: 1.5em">*</span></label></p>
			  <p><input  type="text" name="last_name" maxlength="50" size="30"></p>

			  <p><label for="email"><?php subject_by_lang("Email Addr.", "E-mail", "E-mail"); ?> <span style="color: red; font-size: 1.5em">*</span></label></p>
			  <input  type="text" name="email" maxlength="80" size="45">

			  <p><label for="telephone"><?php subject_by_lang("Telephone No.", "Numero de teléfono", "Número de telefone"); ?> </label></p>
			  <input  type="text" name="telephone" maxlength="30" size="40">

			  <p><label for="comments"><?php subject_by_lang("Message", "Mensaje", "Mensagem"); ?> <span style="color: red; font-size: 1.5em">*</span></label></p>
			  <textarea  name="comments" maxlength="1000" cols="35" rows="5"></textarea>
				<br/>
				<div class="g-recaptcha" data-sitekey="6LdzOh8TAAAAAPIny64Drz1sUlNYGhaYmU2WhHsY"></div>
			  <input type="submit" value="<?php subject_by_lang("Send", "Enviar", "Enviar"); ?>">   <!--<a href="http://www.freecontactform.com/email_form.php">Email Form</a>-->

	</form>
	
<?php include_once("_includes/aside.php"); ?>
</section>
<?php include_once("_includes/footer.php") ?>

