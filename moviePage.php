<!DOCTYPE html>
<html>

<?php
	session_start();
//adapted from Laurence's tute week 10
	$id="";
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = $_GET['id'];
	}
    $cssFile = "css/moviePage.css";
	require_once("includes/header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	var url = "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/moviesJSON.php"
	$(document).ready(function(){
		$.getJSON(url, (function(movie){
			var type = "<?php echo $id; ?>";
			$("#main").append("\
			<div id='subheader'>\
				<h2>Now Showing > "+movie[type].title+"</h2>\
			</div>\
			<div class='moviebox'>\
				<img src="+movie[type].poster+" alt="+movie[type].title+"/>\
				<div class='box'>\
					<div class='infobox'>\
						<h2>"+movie[type].title+"</h2>\
						<img src="+movie[type].rating+" alt= 'Rating'/>\
						<p>" + movie[type].summary + "</p>\
					</div>\
					<video id='trailer'><source src="+movie[type].trailer+" type='video/mp4'></video>\
					<div class='moreinfo'>\
						<details>\
							<summary>More Info</summary>\
							<p>"+movie[type].description+"</p>\
							<div id='sessions'>\
								<h3>Session Times:</h3>\
							</div>\
						</details>\
					</div>\
				</div>\
				<a href='tickets.php'>Book Tickets</a>\
			</div>");
		if((movie[type].screenings).hasOwnProperty("Monday"))
		{
			$("#sessions").append("\
									<div class='session'>\
										<p>Mon - Tue: "+movie[type].screenings.Monday+"</p>\
									</div>");
		}
		if((movie[type].screenings).hasOwnProperty("Wednesday"))
		{
			$("#sessions").append("\
									<div class='session'>\
										<p>Wed - Fri: "+movie[type].screenings.Wednesday+"</p>\
									</div>");
		}
		if((movie[type].screenings).hasOwnProperty("Saturday"))
		{
			$("#sessions").append("\
									<div class='session'>\
										<p>Sat - Sun: "+movie[type].screenings.Saturday+"</p>\
									</div>");
		}
		})) 
	});
	</script>
	<div id="main">
		
	</div>
	
<?php
	require_once("includes/footer.php");
?>

</html>