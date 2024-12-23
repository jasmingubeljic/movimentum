<?php include_once("_includes/header.php")?>
<section id="slideshow">
	<?php include_once("_includes/slideshow.php")?>
</section>
<section id="body" class="cf">
	<section class="tour">

		<?php			
			mysqli_set_charset($connection, 'utf8');
			$query = "SELECT * FROM Tours WHERE id={$_GET['tour']}";
				$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)){
							//heading	
							if($lang == 'en'){							
								echo "<h1>".$row['heading']."</h1>";
							}elseif($lang == 'es'){
								echo "<h1>".$row['heading_es']."</h1>";
							}elseif($lang == 'po'){
								echo "<h1>".$row['heading_po']."</h1>";
							}
										
							//content
							if($lang == 'en'){															
								echo "<p>".$row['content']."</p>";
							}elseif($lang == 'es'){
								echo "<p>". nl2br($row['content_es']) ."</p>";
							}elseif($lang == 'po'){
								echo "<p>". nl2br($row['content_po']) ."</p>";
							}
					}
	
		?>
		
		<?php
		$query = "SELECT img1, img2, img3, img4, img5 FROM Tours WHERE id = {$_GET['tour']}";
			$result = mysqli_query($connection, $query);
				while($image = mysqli_fetch_array($result)){
					$directory = "_images/uploaded_images/";
					if(!empty($image['img1'])){			
						echo "<a href=\"{$directory}{$image['img1']}\" data-lightbox=\"roadtrip\"><img src=\"{$directory}{$image['img1']}\"/></a>";	
					}
					if(!empty($image['img2'])){
						echo "<a href=\"{$directory}{$image['img2']}\" data-lightbox=\"roadtrip\"><img src=\"{$directory}{$image['img2']}\"/></a>";	
					}
					
					if(!empty($image['img3'])){
						echo "<a href=\"{$directory}{$image['img3']}\" data-lightbox=\"roadtrip\"><img src=\"{$directory}{$image['img3']}\"/></a>";	
					}
					if(!empty($image['img4'])){
						echo "<a href=\"{$directory}{$image['img4']}\" data-lightbox=\"roadtrip\"><img src=\"{$directory}{$image['img4']}\"/></a>";	
					}
					if(!empty($image['img5'])){
						echo "<a href=\"{$directory}{$image['img5']}\" data-lightbox=\"roadtrip\"><img src=\"{$directory}{$image['img5']}\"/></a>";					
					}
				}
				
		?>

		<hr>
		<h3><?php subject_by_lang("Tours list", "Lista de excursiones", "Lista de excursões"); ?></h3>
		<?php
			mysqli_set_charset($connection, 'utf8');
			$query = "SELECT * FROM Tours";
				$result = mysqli_query($connection, $query);
					echo "<ul class=\"toursUL\">";
					while($row = mysqli_fetch_array($result)){
						if(($_GET['tour'] == $row['id']) || ($row['id'] == 8)){
							continue;
						}else{
							if($lang == 'en'){							
								echo "<li><a href=\"tours.php?tour={$row['id']}\">".$row['heading']."</a></li>";
							}elseif($lang == 'es'){
								echo "<li><a href=\"tours.php?tour={$row['id']}\">".$row['heading_es']."</a></li>";
							}elseif($lang == 'po'){
								echo "<li><a href=\"tours.php?tour={$row['id']}\">".$row['heading']."</a></li>";
							}
						}						
													
					}
					echo "</ul>";
		?>
		
	</section><!--class="tour"-->
<?php include_once("_includes/aside.php"); ?>
</section>
<?php include_once("_includes/footer.php")?>
