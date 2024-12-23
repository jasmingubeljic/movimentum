	<section id="slogan">
		<p><?php subject_by_lang("Movimentum, moments in movement", "Movimentum, momentos en movimiento", "Movimentum, momentos em movimento"); ?></p>
	</section>
	<footer>
		<section>
			<a href="index.php"><img src="_images/logo_gray.png" id="footerLogo" /></a>
		<article> 
			<h3><?php subject_by_lang("Booking info", "Info-reservas", "Info-reservas"); ?></h3>
			<p><a href="mailto: info@movimentum.hr">info@movimentum.hr</a></p>
			<p>(+385) 98 786 159</p>
		</article>
		<article> 
			<h3>Tours</h3>
				<?php 
					mysqli_set_charset($connection, 'utf8');
					$query = "SELECT * FROM Tours WHERE id=1";
					$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)){
						if($lang == 'en'){
							echo "<p><a href=\"tours.php?tour=1\">{$row['heading']}</a></p>";
						}elseif($lang == 'es'){
							echo "<p><a href=\"tours.php?tour=1\">{$row['heading_es']}</a></p>";
						}elseif($lang == 'po'){
							echo "<p><a href=\"tours.php?tour=1\">{$row['heading_po']}</a></p>";
						}
					}
				?>
			<p><a href="tours.php?tour=4"><?php subject_by_lang("One Day Excursions", "Excursiones de un dia", "Excursões de um dia"); ?></a></p>
		</article>
		<article> 
			<h3><?php subject_by_lang("Guestbook", "Libro de visitas", "Livro de visitas"); ?></h3>
			<p><a href="guestbook.php"><?php subject_by_lang("Sign the guestbook", "Aquí pueden dejar sus comentarios", "Aqui podem deixar a vossa opinião"); ?></a></p>
		</article>
		<a href="https://www.facebook.com/movimentum.hr/" target="_blank"><img src="_images/fbIcon.png" id="social_icons"/></a>
		<a href="https://www.instagram.com/movimentum.hr/" target="_blank"><img src="_images/instagramIcon.png" id="social_icons"/></a>
		<a href="https://www.tripadvisor.com/Attraction_Review-g294454-d10237369-Reviews-Movimentum_Tours-Zagreb_Central_Croatia.html" target="_blank"><img src="_images/tripadvisorIcon.png" id="social_icons"/></a>
		<hr>
		<p class="rights">Copyright © 2015 All Rights Reserved / Movimentum <a href="login.php" class="loginLink">&nbsp;&nbsp;|&nbsp;&nbsp; login</a></p>
		<section>
		
	</footer>
	<script src="_scripts/lightbox.js"></script>
	<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
    </script>
        
	<script src="_scripts/DoubleTapToGo.js"></script>
	<script>$( '#m_navigation ul li a:has(ul)' ).doubleTapToGo();</script>
</body>

</html>
