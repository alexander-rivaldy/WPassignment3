<!doctype html>
<html>

<?php 
	$cssFile = "css/movies.css";
	require_once ("includes/header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
	$url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php";
	$json = file_get_contents($url);
	$obj = json_decode($json);
	echo "
		<div id='main'>
			<div id='subheader'>
				<h2>Now Showing</h2>
			</div>";
	$type = "CH";
	include("includes/movie.php");
	echo "</div>"
?>
    
<?php require_once("includes/footer.php"); ?>
  
</html>
