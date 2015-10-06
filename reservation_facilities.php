<!DOCTYPE html>
<html>
<head>
<?php
	if (isset($_POST))
	{
		$movie = $_POST["movie"];
		$day = $_POST["day"];
		$time = $_POST["time"];
		
		$reservation=array('movie'=>$movie, 'day'=>$day, 'time'=>$time);
		
		$_SESSION["reservation"] = $reservation;
	}
?>
</head>
<body>
	<header>
	</header>
	<main>
		<?php 
			echo "<p>".$_SESSION['reservation']['movie']."</p>";
		?>
		<form action="" method="POST">
		  Movie:<select name="movie">
					<option value="select"> Select </option>
					<option value="inside_out"> Inside Out </option>
					<option value="rush_hour"> Rush Hour </option>
					<option value="toys_story"> Toy's Story </option>
					<option value="finding_nemo"> Finding Nemo </option>
				</select><br><br>
			
			Day:<select name="day">
					<option value="select"> Select </option>
					<option value="monday"> Monday </option>
					<option value="tuesday"> Tuesday </option>
					<option value="wednesday"> Wednesday </option>
					<option value="thursday"> Thursday </option>
					<option value="friday"> Friday </option>
					<option value="saturday"> Saturday </option>
					<option value="sunday"> Sunday </option>
				</select><br><br>
		
		    Day:<select name="time">
					<option value="select"> Select </option>
					<option value="one"> 1 PM </option>
					<option value="two"> 2 PM </option>
					<option value="three"> 3 PM </option>
					<option value="four"> 4 PM </option>
				</select><br><br>
				
		<input type="submit" value="Submit">
	</form>
	</main>
</body>