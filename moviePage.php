<!DOCTYPE html>
<html>

<?php
	session_start();
//adapted from Laurence's tute week 10
	$id="";
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = $_GET['id'];
	}

	require_once("includes/header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<div id="main">
		<script>
			var url = "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/moviesJSON.php"
			$(document).ready(function(){
				$.getJSON(url, (function(movie){
					console.log("movie title : " + movie['<?php echo $id; ?>'].title);
					//add stuffs for layout here
				})) 
			})
		</script>
	</div>
	
<?php
	require_once("includes/footer.php");
?>

</html>