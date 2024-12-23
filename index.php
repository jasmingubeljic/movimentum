<?php include_once("_includes/header.php")?>
	<section id="slideshow">
		<?php include_once("_includes/slideshow-index.php")?>
	</section>
	<section id="body" class="cf">
		<h1><?php subject_by_lang("Movimentum Tours <span>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>", "Movimentum excursiones <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>", "Movimentum excursões <span>-----------------------------------------------------------------------------------------------------------------------------------------------------------</span>"); ?></h1>
		<section> <!-- in this section tag was id="toursMenu" but this caused some issues while flexing the window-->
			<a href="tours.php?tour=1">
			<section class="item">
				<div class="imageContainer">
					<img src="_images/zagreb_tour.jpg" width="205">
				</div>
				<div class="descrpt">
					<h3><?php header_tour('1'); ?></h3>
					<h3><?php duration_hours(3); ?></h3>
					<!--<h3><?php price('Price','Precio','Preço'); ?>: 70€</h3>-->
				</div>
			</section><!--class="item"-->
			</a>
			<a href="tours.php?tour=2">
			<section class="item">
				<div class="imageContainer" >
					<img src="_images/plitvice_tour.jpg" width="205">
				</div>
					<div class="descrpt">
						<h3><?php header_tour('2'); ?></h3>
						<h3><?php duration_hours(9); ?></h3>
						<!--<h3><?php price('Price','Precio','Preço'); ?>: 70€</h3>-->
					</div>
			</section>
			</a>
			<a href="tours.php?tour=3">
			<section class="item">
				<div class="imageContainer" >
					<img src="_images/trakoscan_tour.jpg" width="205">
				</div>
					<div class="descrpt">
						<h3><?php header_tour('3'); ?></h3>
						<h3><?php duration_hours(9); ?></h3>
						<!--<h3><?php price('Price','Precio','Preço'); ?>: 70€</h3>-->
					</div>
			</section>
			</a>
		</section> <!--toursMenu -->
		
		<?php include_once("_includes/aside.php"); ?>
		<section id="excursionsMenu">
			<h1 style="float: left; margin-top: 30px" class="cf"><?php subject_by_lang("One Day Excursions", "Excursiones de un dia", "Excursões de um dia"); ?> <span>----------------------------------------------------------------------------------------------------</span></h1>
		
		<a href="tours.php?tour=4">
		<section class="item">
			<div class="imageContainer2 image1">
				<img src="_images/kumrovec.jpg" width="150">
			</div>
			<div class="descrpt2">
				<h3><?php header_tour('4'); ?></h3>
				<h3><?php duration_hours(8); ?></h3>
			</div>
		</section><!--class="item"-->
		</a>
		
		<a href="tours.php?tour=5">
		<section class="item">
			<div class="imageContainer2 image1">
				<img src="_images/hum.jpg" width="150">
			</div>
			<div class="descrpt2">
				<h3><?php header_tour('5'); ?></h3>
				<h3><?php duration_hours(10); ?></h3>
			</div>
		</section><!--class="item"-->
		</a>
		
		<a href="tours.php?tour=6">
		<section class="item">
			<div class="imageContainer2 image1">
				<img src="_images/ljubljana.jpg" width="150">
			</div>
			<div class="descrpt2">
				<h3><?php header_tour('6'); ?></h3>
				<h3><?php duration_hours(10); ?></h3>
			</div>
		</section><!--class="item"-->
		</a>
		
		<a href="tours.php?tour=7">
		<section class="item">
			<div class="imageContainer2 image1">
				<img src="_images/postojna.jpg" width="150">
			</div>
			<div class="descrpt2">
				<h3><?php header_tour('7'); ?></h3>
				<h3><?php duration_hours(10); ?></h3>
			</div>
		</section><!--class="item"-->
		</a>
	</section>
	</section><!--id="body"-->
	
<?php include_once("_includes/footer.php")?>