

function searchNow(str)
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
}

function anotherTest()
{
    var url = "https://jupiter.csit.rmit.edu.au/~e54061/wp/moviesJSON.php"
    var movies = $.getJSON(url, function(jd) {
        $("main").append("<p> Title : " + jd["CH"] + "</p>");
    });
}