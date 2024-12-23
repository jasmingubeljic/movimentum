<ul>
				<?php 
					mysqli_set_charset($connection, 'utf8');
					$query = "SELECT * FROM Tours WHERE id=1";
					$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)){
						if($lang == 'en'){
							echo "<li><a href=\"tours.php?tour=1\">{$row['heading']}</a></li>";
						}elseif($lang == 'es'){
							echo "<li><a href=\"tours.php?tour=1\">{$row['heading_es']}</a></li>";
						}elseif($lang == 'po'){
							echo "<li><a href=\"tours.php?tour=1\">{$row['heading_po']}</a></li>";
						}
					}
				?>
				<li><a href=""><?php subject_by_lang("One Day Excursions", "Excursiones de un dia", "Excursões de um dia"); ?></a>
					<ul class="submenu">
						<?php 
							mysqli_set_charset($connection, 'utf8');
							$query = "SELECT * FROM Tours WHERE id IN(2,3,4,5,6,7)";
							$result = mysqli_query($connection, $query);
							while($row = mysqli_fetch_array($result)){
								if($lang == 'en'){
									echo "<li><a href=\"tours.php?tour={$row['id']}\">{$row['heading']}</a></li>";
								}elseif($lang == 'es'){
									echo "<li><a href=\"tours.php?tour={$row['id']}\">{$row['heading_es']}</a></li>";
								}elseif($lang =='po'){
									echo "<li><a href=\"tours.php?tour={$row['id']}\">{$row['heading_po']}</a></li>";
								}
							}
						?>
						
					</ul>
				</li>
				<!--<li><a href="about.php">About Me</a></li>-->
				<li><a href="tours.php?tour=8"><?php header_tour(8)?></a></li>				
				<li><a href="contact.php"><?php subject_by_lang("Contact", "Contacto", "Contacto"); ?></a></li>
</ul>