<!DOCTYPE html>
<html>
<?php 
	session_start();
	$cssFile = "css/movies.css";
	
	$movie="";
	$day="";
	$time="";
	$reservation="";
	
	if(isset($_POST) && !empty($_POST))
	{
		if(isset($_POST['movie'] ) && !empty($_POST['movie'] ) )
		{
			$movie = $_POST['movie'];
		}
		if(isset($_POST['day'] ) && !empty($_POST['day'] ) )
		{
			$day = $_POST['day'];
		}
		if(isset($_POST['time'] ) && !empty($_POST['time'] ) )
		{
			$time = $_POST['time'];
		}
		
		$reservation = array('movie'=>$movie,'day'=>$day, 'time'=>$time);
		$_SESSION['cart']['screenings'] = $reservation;
	}
	
	require_once ("includes/header.php");
?>


<?php require_once("includes/footer.php"); ?>

</html>