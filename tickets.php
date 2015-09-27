<!doctype html>
<html>

<?php 
	$cssFile = "css/tickets.css";
	require_once ("includes/header.php");
?>
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
        	<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post" id="form">
                <div id="movieinfo">
                    <div class="category">
                        <label>Movie Title:</label>
                        <select name="movie" id="movie" onchange="movieChange()">
                        	<option value="default"></option>
                            <option value="CH">Inside Out</option>
                            <option value="AC">Mission: Impossible - Rogue Nation</option>
                            <option value="AF">The Tribe</option>
                            <option value="RC">Trainwreck</option>
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
                	<div class="category">
                        <label>Adult:</label>
                        <select name="SA" class="ticket" id="SA" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalSA">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>Concession:</label>
                        <select name="SP" class="ticket" id="SP" onchange="seatChange()">
							<option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalSP">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>Child:</label>
                        <select name="SC" class="ticket" id="SC" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalSC">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>First Class (Adult):</label>
                        <select name="FA" class="ticket" id="FA" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalFA">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>First Class (Child):</label>
                        <select name="FC" class="ticket" id="FC" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalFC">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>Beanbag (1 person):</label>
                        <select name="B1" class="ticket" id="B1" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalB1">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>Beanbag (2 people):</label>
                        <select name="B2" class="ticket" id="B2" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalB2">$0.00</label><br>
                	</div>
                    <div class="category">
                        <label>Beanbag (3 children):</label>
                        <select name="B3" class="ticket" id="B3" onchange="seatChange()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label class="subtotal" id="subtotalB3">$0.00</label><br>
                	</div>
                    <div id="total"><label>Total:</label> <input type="text" name="price" id="price" value="$0.00" readonly></div>
                    <div id="submit"><input type="submit" value="Submit"></div>
                </div>
        	</form>
        </div>
    </div>
  
<?php require_once("includes/footer.php"); ?>

</html>
