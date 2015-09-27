<!DOCTYPE html>
<html>

<?php 
	$cssFile = "css/index.css";
	require_once ("includes/header.php"); 
?>
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
            <div class="moviebox">
              <img src="images/inside-out-poster.jpg" alt="Inside Out"/>
              <p>Inside Out</p>
            </div>
            <div class="moviebox">
              <img src="images/mission-impossible-poster.jpg" alt="Mission: Impossible - Rogue Nation"/>
              <p>Mission: Impossible - Rogue Nation</p>
            </div>
            <div class="moviebox">
              <img src="images/the-tribe-poster.jpg" alt="The Tribe"/>
              <p>The Tribe</p>
            </div>
            <div class="moviebox">
              <img src="images/trainwreck-poster.jpg" alt="Trainwreck"/>
              <p>Trainwreck</p>
            </div>
      	</div>
    </div> 

<?php include("includes/footer.php"); ?>

</html>
