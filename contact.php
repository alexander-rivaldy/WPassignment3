<!doctype html>
<html>

<?php include("includes/header.php"); ?>
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all">

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

<?php include("includes/footer.php"); ?>

</html>
