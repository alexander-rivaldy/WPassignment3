<!DOCTYPE html>
<html>

<?php 
	session_start();
	$cssFile = "css/index.css";
	require_once ("includes/header.php"); 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/indexajax.js"></script>

  <div id="main">
    <div id="slider">
      <figure>
        <img src="images/new-seats.jpg" alt="New cinema seats!"/>
        <img src="images/3D-projection.jpg" alt="All-improved 3D projection!"/>
        <img src="images/dolby-sound.jpg" alt="Supported by Dolby Surround Sound">
        <img src="images/3D-projection.jpg" alt="All-improved 3D projection!"/>
        <img src="images/new-seats.jpg" alt="New cinema seats!"/>
      </figure>
    </div>
    
    <div id="trending">
        <div id="subheader">
        	<h2>WHAT'S TRENDING</h2>
        </div>
      	<div id="posters">
		</div>
    </div> 

<?php include("includes/footer.php"); ?>

</html>
