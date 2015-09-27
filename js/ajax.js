

$(document).ready(function(){
	var url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php"
	var movies = $.getJSON(url, function(jd) {
		
		$("body").append("<p> Title : " + jd["CH"].title + "</p>");
		$(".container").append("\
		<div id='main'>\
			<div id='subheader'>\
				<h2>Now Showing</h2>\
			</div>\
			<div class='moviebox'>\
				<img src="+ jd["CH"].poster +" alt=" + jd["CH"].title + "/>\
				<div class='box'>\
					<div class='infobox'>\
						<h2>" + jd["CH"].title + "</h2>\
						<h6>PG | 94 min | Children</h6>\
						<p>" + jd["CH"].summary + "</p>\
					</div>\
					<div class='moreinfo'>\
						<details>\
							<summary>More Info</summary>\
							<p>" + jd["CH"].description + "</p>\
							<div id='sessions'>\
								<h3>Session Times:</h3>\
								<div class='session'>\
									<p>Mon - Tue: 1 PM</p>\
								</div>\
								<div class='session'>\
									<p>Wed - Fri: 6 PM</p>\
								</div>\
								<div class='session'>\
									<p>Sat - Sun: 12 PM</p>\
								</div>\
							</div>\
						</details>\
					</div>\
				</div>\
				<a href='tickets.php'>Book Tickets</a>\
			</div>\
		</div>");
	});	
	console.log('<?php echo "TEST"; ?>')
})




/*function searchNow(str)
{
    $.ajax({
        url: "https://<?php echo $_SERVER['jupiter.csit.rmit.edu.au']; ?>/~e54061/wp/moviesHTML.php",
        type: "POST",
        async: false
    });
}

function test()
{
    console.log("test");
    jQuery.ajax({
        url: "movies.php",
        success: function(result){
            var html = jQuery('<div>').html(result);
            document.getElementById("test").innerHTML = html.find("#ACPoster").html() ;
        }
    });
}*/

