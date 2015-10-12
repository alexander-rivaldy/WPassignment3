<!doctype html>
<html>

<?php 
	session_start();
	$cssFile = "css/about.css";
	require_once ("includes/header.php");
?>

  <div id="main">
  	<div id="subheader">
    	<h2>About Us</h2>
    </div>
    <div id="aboutPage">
        <p> Silverado Cinemas is proud to present to you, our newly improved theater. Our cinema has just gone under renovation in order provide you with excellent service, which includes brand new seats, 3D projection, and Dolby Surround sound system. We are here to give you a first class cinema experience with the convenience of your home.
        </p>
        <div id="sessions">
        	<h2>Weekly Schedule</h2>
            <div class="box">
                <div class="day">
                    <h3>Mon - Tue</h3>
                </div>
                <p>
				<?php
					$url = "https://".$_SERVER['SERVER_NAME']."/~e54061/wp/moviesJSON.php";
					$content = file_get_contents($url);
					$movies = json_decode($content, true);
					foreach($movies as $key => $value)
					{
						foreach($value['screenings'] as $day =>$time)
						{
							if($day == "Monday" )
							{
								echo $time.": ".$movies[$key]['title']."<br>";
								continue;
							}
						}
					}
				?>
                </p>
            </div>
            <div class="box">
                <div class="day">
                    <h3>Wed - Fri</h3>
                </div>
                <p>
				<?php
					foreach($movies as $key => $value)
					{
						foreach($value['screenings'] as $day =>$time)
						{
							if($day == "Wednesday" )
							{
								echo $time.": ".$movies[$key]['title']."<br>";
								continue;
							}
						}
					}
				?>
                </p>
            </div>
            <div class="box">
                <div class="day">
                    <h3>Sat - Sun</h3>
                </div>
				<p>
                <?php
					foreach($movies as $key => $value)
					{
						foreach($value['screenings'] as $day =>$time)
						{
							if($day == "Saturday" )
							{
								echo $time.": ".$movies[$key]['title']."<br>";
								continue;
							}
						}
					}
				?>
				</p>
            </div>
        </div>
        <div id="prices">
        	<h2>Ticket Prices</h2>
            <div class="box">
                <div id="category">
                    <h3>""<br>""</h3>
                </div>
                <h3>Standard</h3>
                <p>
                Adult<br>
                Concession<br>
                Children
                </p>
                <h3>First Class</h3>
                <p>
                Adult<br>
                Children
                </p>
                <h3>Bean Bag</h3>
            </div>
            <div class="box">
                <div class="day">
                    <h3>Normals</h3>
                </div>
                <h3>Standard</h3>
                <p>
                $18<br>
                $15<br>
                $12
                </p>
                <h3>First Class</h3>
                <p>
                $30<br>
                $25
                </p>
                <p>$30</p>
            </div>
            <div class="box">
                <div class="day">
                    <h3>Specials*</h3>
                </div>
                <h3>Standard</h3>
                <p>
                $12<br>
                $10<br>
                $8
                </p>
                <h3>First Class</h3>
                <p>
                $25<br>
                $20
                </p>
                <p>$20</p>
            </div>
            <p>*Special Prices are available ONLY on Monday and Tuesday, or on weekdays at 1 PM.</p>
        </div>
    </div>
    
<?php require_once("includes/footer.php"); ?>

</html>
