<!DOCTYPE html>
<html>

<?php 
	session_start();
	$cssFile = "css/movies.css";
	require_once ("includes/header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/moviesajax.js"></script>
	
	<div class="container">
		<div class="main">
			<div id="subheader">
				<h2>Now Showing</h2>
			</div>
		</div>		
	</div>
    
<?php require_once("includes/footer.php"); ?>
  
</html>
