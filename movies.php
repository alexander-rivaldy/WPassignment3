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
			<div class="moviebox">
		    	<img src="../Assignment 2 Files/inside-out-poster.jpg" alt="Inside Out"/>
		        <div class="box">
		        	<div class="infobox">
		                <h2>Inside Out</h2>
		                <img src="../images/ratedG.png" alt= "General Audience"/>
		                <h6>94 min | Children</h6>
		                <p>After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.</p>
		            </div>
		            <div class="moreinfo">
		            	<details>
		                	<summary>More Info</summary>
		                	<p>Riley (Kaitlyn Dias) is a happy, hockey-loving 11-year-old Midwestern girl, but her world turns upside-down when she and her parents move to San Francisco. Riley's emotions -- led by Joy (Amy Poehler) -- try to guide her through this difficult, life-changing event. However, the stress of the move brings Sadness (Phyllis Smith) to the forefront. When Joy and Sadness are inadvertently swept into the far reaches of Riley's mind, the only emotions left in Headquarters are Anger, Fear and Disgust.</p>
		                    <div id="sessions">
		                    	<h3>Session Times:</h3>
		                    	<div class="session">
		                        	<p>Mon - Tue: 1 PM</p>
		                        </div>
		                        <div class="session">
		                        	<p>Wed - Fri: 6 PM</p>
		                        </div>
		                        <div class="session">
		                        	<p>Sat - Sun: 12 PM</p>
		                        </div>
		                    </div>
		                </details>
		     	   	</div>
		    	</div>
        		<a href="tickets.html">Book Tickets</a>
    		</div>
		</div>		
	</div>
    
<?php require_once("includes/footer.php"); ?>
  
</html>
