$(document).ready(function(){
	var url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php"
	
	var movies = $.getJSON(url, function(objects){
		$.each(objects, function(key,value) {
			$("#posters").append("\
				<div class='moviebox'>\
				  <img src="+objects[key].poster+" alt="+objects[key].title+"/>\
				  <p>"+objects[key].title+"</p>\
				</div>\
			")
		})
	})
})