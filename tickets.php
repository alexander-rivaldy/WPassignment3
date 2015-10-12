<!doctype html>
<html>

<?php 
	session_start();
	$cssFile = "css/tickets.css";
	require_once ("includes/header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/bookingform.js"></script>

  <div id="main">
  	<div id="subheader">
    	<h2>Book Tickets</h2>
    </div>
  	<div id="booking">
    	<img src="images/seat-chart.jpg"/>
        <div id="legend">
        	<div class="legend">
            	<img src="images/first-class.png"/>
                <h3>First Class seats</h3>
                <h6>Available for Adults and Children</h6>
            </div>
            <div class="legend">
            	<img src="images/standard.png"/>
                <h3>Standard seats</h3>
                <h6>Available for Adults, Concession, and Children</h6>
            </div>
            <div class="legend">
            	<img src="images/bean-bag.png"/>
                <h3>Bean bag seats</h3>
                <h6>Accomodates 2 adults OR 1 adult + 1 child OR 3 children</h6>
            </div>
        </div>
        <div id="bookingform">
        	<form action="cart.php" method="post" id="form">
                <div id="movieinfo">
                    <div class="category">
                        <label>Movie Title:</label>
                        <select name="movie" id="movie" onchange="movieChange()">
                        	<option value="default" disabled selected></option>
                            
                        </select><br>
                    </div>
                    <div class="category">
                        <label>Session Day:</label>
                        <select name="day" id="day" onchange="dayChange()" disabled>
                        </select><br>
                    </div>
                    <div class="category">
                        <label>Session Time:</label>
                        <input type="text" name="time" id="time" readonly>
                      	<br>
                    </div>
                </div>
                <div id="ticketinfo">
				<?php
					$label = "Adult:";
					$name = "SA";
					include("includes/selects.php");
					
					$label = "Concession:";
					$name = "SP";
					include("includes/selects.php");
					
					$label = "Child:";
					$name = "SC";
					include("includes/selects.php");
					
					$label = "First Class (Adult):";
					$name = "FA";
					include("includes/selects.php");
					
					$label = "First Class (Child):";
					$name = "FC";
					include("includes/selects.php");
					
					$label = "Beanbag (1 person):";
					$name = "B1";
					include("includes/selects.php");
					
					$label = "Beanbag (2 people):";
					$name = "B2";
					include("includes/selects.php");
					
					$label = "Beanbad (3children):";
					$name = "B3";
					include("includes/selects.php");
				?>
                    <div id="total"><label>Total:</label> <input type="text" name="price" id="price" value="$0.00" readonly></div>
                    <div id="submit"><input type="submit" value="Submit"></div>
                </div>
        	</form>
        </div>
    </div>
  
<?php require_once("includes/footer.php"); ?>

</html>
