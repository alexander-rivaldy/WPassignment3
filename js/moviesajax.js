

$(document).ready(function(){
	var url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php"
	
	var movies = $.getJSON(url, function(jd) {
		var loop = parseInt(0);
		$.each(jd, function(key,value) {
		$(".main").append("\
				<div class='moviebox'>\
					<img src="+ jd[key].poster +" alt=" + jd[key].title + "/>\
					<div class='box'>\
						<div class='infobox'>\
							<h2>" + jd[key].title + "</h2>\
							<h6>PG | 94 min | Children</h6>\
							<p>" + jd[key].summary + "</p>\
						</div>\
						<div class='moreinfo'>\
							<details>\
								<summary>More Info</summary>\
								<p>" + jd[key].description + "</p>\
								<div class='sessions'>\
									<h3>Session Times:</h3>");
		if((jd[key].screenings).hasOwnProperty("Monday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Mon - Tue: "+jd[key].screenings.Monday+"</p>\
									</div>")
		}
		if((jd[key].screenings).hasOwnProperty("Wednesday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Wed - Fri: "+jd[key].screenings.Wednesday+"</p>\
									</div>")
		}
		if((jd[key].screenings).hasOwnProperty("Saturday"))
		{
			$(".sessions:eq("+loop+")").append("\
									<div class='session'>\
										<p>Sat - Sun: "+jd[key].screenings.Saturday+"</p>\
									</div>")
		}
		$(".infobox:eq("+loop+")").append("\
								</div>\
							</details>\
						</div>\
					</div>\
					<a href='tickets.php'>Book Tickets</a>\
				</div>\
			</div>");
		loop++;
		});
		
	});	
	console.log('<?php echo "TEST"; ?>')
})


