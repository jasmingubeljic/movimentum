<?php require_once("_includes/session.php")?>
<?php include_once("_includes/header_for_processing.php") ?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">
	<section class="tour">
	<h1>Guestbook comments</h1>
		<?php 
			$query = "SELECT * FROM guestbook";
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result)){ 
				print "<p style=\"color: rgba(0,0,0,.8)\">\"{$row['comment']}\" <i style=\"color: black\">({$row['name']}, {$row['country']})</i> <a href=\"_staff/delete_comment.php?comment={$row['id']}\" style=\"color: #ed3323\" onclick=\"return confirm('Jeste li sigurni da zelite izbrisati ovaj komentar?');\">Izbriši</a></p>";
				echo "<br>";
			}
		?>
		<a href="update.php?tour=1" style="color: #ed3323"><< Vrati se nazad</a>	
	</section>
	<?php include_once("_includes/aside.php"); ?>
</section>
<?php include_once("_includes/footer.php") ?>