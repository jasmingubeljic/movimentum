<aside>
	<?php
		mysqli_set_charset($connection, 'utf8');
		$query = "SELECT * FROM misc WHERE id IN(2,3)";
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_array($result)){
			if($lang == 'en'){
				echo "<h2>{$row['heading']}</h2>";
				echo "<p>{$row['content']}</p>";
				if($row['id']==3){
					$taLink = "https://www.tripadvisor.com/Attraction_Review-g294454-d10237369-Reviews-Movimentum_Tours-Zagreb_Central_Croatia.html";
					echo "<a href=\"{$taLink}\" target=\"_blank\"><img src=\"_images/tripadvisor-logo.gif\"></a>";
				}
			}elseif($lang == 'es'){
				echo "<h2>{$row['heading_es']}</h2>";
				echo "<p>{$row['content_es']}</p>";
				if($row['id']==3){
					$taLink = "https://www.tripadvisor.com/Attraction_Review-g294454-d10237369-Reviews-Movimentum_Tours-Zagreb_Central_Croatia.html";
					echo "<a href=\"{$taLink}\" target=\"_blank\"><img src=\"_images/tripadvisor-logo.gif\"></a>";
				}
			}elseif($lang == 'po'){
				echo "<h2>{$row['heading_po']}</h2>";
				echo "<p>{$row['content_po']}</p>";
				if($row['id']==3){
					$taLink = "https://www.tripadvisor.com/Attraction_Review-g294454-d10237369-Reviews-Movimentum_Tours-Zagreb_Central_Croatia.html";
					echo "<a href=\"{$taLink}\" target=\"_blank\"><img src=\"_images/tripadvisor-logo.gif\"></a>";
				}
			}
		}
	?>
</aside>