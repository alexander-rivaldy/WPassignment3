

$(document).ready(function(){
	var url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php";
	
	var movies = $.getJSON(url, function(movies) {
		var loop = parseInt(0);
		$.each(movies, function(type,value) {
		$(".main").append("\
				<div class='moviebox'>\
					<img src="+ movies[type].poster +" alt=" + movies[type].title + "/>\
					<div class='box'>\
						<div class='infobox'>\
							<a href='moviePage.php?id="+type+"'><h2>" + movies[type].title + "</h2></a>\
							<img src="+movies[type].rating+" alt= 'Rating'/>\
							<p>" + movies[type].summary + "</p>\
						</div>\
						<div class='moreinfo'>\
							<details>\
								<summary>More Info</summary>\
								<p>" + movies[type].description + "</p>\
								<div class='sessions'>\
									<h3>Session Times:</h3>");
		if((movies[type].screenings).hasOwnProperty("Monday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Mon - Tue: "+movies[type].screenings.Monday+"</p>\
									</div>")
		}
		if((movies[type].screenings).hasOwnProperty("Wednesday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Wed - Fri: "+movies[type].screenings.Wednesday+"</p>\
									</div>")
		}
		if((movies[type].screenings).hasOwnProperty("Saturday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Sat - Sun: "+movies[type].screenings.Saturday+"</p>\
									</div>")
		}
		$(".infobox:eq("+loop+")").append("\
								</div>\
							</details>\
						</div>\
					</div>\
					<a id='book' href='tickets.php'>Book Tickets</a>\
				</div>\
			</div>");
		loop++;
		});
		
	});	
	console.log('<?php echo "TEST"; ?>')
})


