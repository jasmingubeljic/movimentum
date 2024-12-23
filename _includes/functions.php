<?php
//FUNCTIONS
function php_error(){
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);
}
function mysql_prep( $value ) {
		global $connection;
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysqli_real_escape_string ( $connection, $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
}

function redirect_to($location){
	echo "<script> window.location.replace('{$location}')</script>";
}

function img_preview($img){
	global $connection;
	$query = "SELECT $img FROM Tours WHERE id = {$_GET['tour']}";
	$result = mysqli_query($connection, $query);
	while($imgPreview = mysqli_fetch_array($result)){
		echo $imgPreview[$img]; 
	}
}

function delete_img($img){
	//izbrisati button if image exists in the sql
	global $connection;
	$query = "SELECT $img FROM Tours WHERE id = {$_GET['tour']}";
	$result = mysqli_query($connection, $query);
	if($image = mysqli_fetch_array($result)){	
		if(!empty($image[$img])){
			echo "<a href=\"_staff/delete_image.php?tour={$_GET['tour']}&img={$img}\" onclick=\"return confirm('Jeste li sigurni da zelite izbrisati ovu sliku?');\"> Izbrisati</a>";
		}
	}
}
function subject_by_lang($term1, $term2, $term3){
		if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
		}else{
			$lang = "en";
		}
		if($lang == 'en'){
			echo $term1;
		}elseif($lang == 'es'){
			echo $term2;
		}elseif($lang == 'po'){
			echo $term3;
		}
}
function duration_hours($value){
	subject_by_lang("Duration", "Duración", "Duração"); echo": ". $value ." "; subject_by_lang("hours", "horas", "horas");
}
function price($term1, $term2, $term3){
	if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
		}else{
			$lang = "en";
		}
		if($lang == 'en'){
			echo $term1;
		}elseif($lang == 'es'){
			echo $term2;
		}elseif($lang == 'po'){
			echo $term3;
		}
}
function header_tour($id){
		global $connection;
		
		if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
		}else{
			$lang = "en";
		}
		
		mysqli_set_charset($connection, 'utf8');
		$query = "SELECT * FROM Tours WHERE id={$id}";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_array($result)){
			if($lang == 'en'){
				echo $row['heading'];
			}elseif($lang == 'es'){
				echo $row['heading_es'];
			}elseif($lang == 'po'){
				echo $row['heading_po'];
			}
		}
	
}


?>

