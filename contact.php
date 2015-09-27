<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale=1.0, minimum-scale=1, maximum-scale=1">
<title>Silverado Cinemas</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="all">
<link href="contact.css" rel="stylesheet" type="text/css" media="all">
<link href='https://fonts.googleapis.com/css?family=Expletus+Sans:400,700,600,500' rel='stylesheet' type='text/css'>
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
    	<h2>Contact Us</h2>
    </div>
  	<div id="contactform">
		<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
        	<div class="label">
                <label>Email Address:</label>
                <input type="email" name="email" required><br>
            </div>
            <div class="label">
                <label>Subject:</label>
                <select name="subject">
                    <option value="General Enquiry">General Enquiry</option>
                    <option value="Group and Corporate Bookings">Group and Corporate Bookings</option>
                    <option value="Suggestions & Complaints">Suggestions & Complaints</option>
                </select><br>
            </div>
            <div class="label">
                <label>Message:<br></label>
                <textarea name="message" required></textarea><br>
            </div>
            <div id="submit"><input type="submit" value="Submit"></div>
        </form>
    </div>
    
  </div>
  
  <div id="footer">
    	<p>&copy; Safira Nugroho (s3514613)</p>
  </div>
  
</div>
</body>

</html>
