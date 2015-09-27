<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale=1.0, minimum-scale=1, maximum-scale=1">
<title>Silverado Cinemas</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="all">
<link href="tickets.css" rel="stylesheet" type="text/css" media="all">
<link href='https://fonts.googleapis.com/css?family=Expletus+Sans:400,700,600,500' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="bookingform.js"></script>
</head>

<body>
<div class="container">
  <div id="header">
  	<p><a href="index.php"><img src="../a2/files/silverado(1).png" alt="Silverado Cinemas"/></a></p>
  </div>
  <div id="nav">
  	<ul>
      <li id="movies"><a href="movies.php">Movies</a></li>
      <li id="tickets"><a href="tickets.php">Tickets</a></li>
      <li id="contact"><a href="contact.php">Contact</a></li>
      <li id="about"><a href="about.php">About</a></li>
    </ul>
  </div>
  <div id="main">
  	<div id="subheader">
    	<h2>Book Tickets</h2>
    </div>
  	<div id="booking">
    	<img src="../a2/files/seat-chart.jpg"/>
        <div id="legend">
        	<div class="legend">
            	<img src="../a2/files/first-class.png"/>
                <h3>First Class seats</h3>
                <h6>Available for Adults and Children</h6>
            </div>
            <div class="legend">
            	<img src="../a2/files/standard.png"/>
                <h3>Standard seats</h3>
                <h6>Available for Adults, Concession, and Children</h6>
            </div>
            <div class="legend">
            	<img src="../a2/files/bean-bag.png"/>
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
  
  </div>
  
  <div id="footer">
    	<p>&copy; Safira Nugroho (s3514613)</p>
  </div>
  
</div>
</body>

</html>
