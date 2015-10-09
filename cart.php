<!DOCTYPE html>
<html>
<?php 
	session_start();
	$cssFile = "css/movies.css";
	print_r($_POST);
	
	$movie="";
	$day="";
	$time="";
	$reservation="";
	
	if(isset($_POST) && !empty($_POST))
	{
		//movie details
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
		
		function calcPrice($movie, $day, $time, $ticket)
		{
				if($day == 'Monday' || $day == 'Tuesday'
				   || ($day == 'Wednesday' && $time = 1 PM) 
				   || ($day == 'Thursday' && $time = 1 PM) 
				   || ($day == 'Friday' && $time = 1 PM))
				{
					if($ticket == 'SA')
					{
						$price = (double) 12.00;
						return $price;
					}
					if($ticket == 'SP')
					{
						$price = (double) 10.00;
						return $price;
					}
					if($ticket == 'SC')
					{
						$price = (double) 8.00;
						return $price;
					}
					if($ticket == 'FA')
					{
						$price = (double) 25.00;
						return $price;
					}
					if($ticket == 'FC' || $ticket == 'B1' || $ticket == 'B2' || $ticket == 'B3')
					{
						$price = (double) 20.00;
						return $price;
					}
				}
			elseIf($day == 'Saturday' || $day == 'Sunday' 
			       || $day == 'Wednesday' || $day == 'Thursday' 
				   || $day == 'Friday')
			{
				if($ticket == 'SA')
					{
						$price = (double) 18.00;
						return $price;
					}
					if($ticket == 'SP')
					{
						$price = (double) 15.00;
						return $price;
					}
					if($ticket == 'SC')
					{
						$price = (double) 12.00;
						return $price;
					}
					if($ticket == 'FC')
					{
						$price = (double) 25.00;
						return $price;
					}
					if($ticket == 'FA' || $ticket == 'B1' || $ticket == 'B2' || $ticket == 'B3')
					{
						$price = (double) 30.00;
						return $price;
					}
			}
			
		}
		//seats
		$seats = array();
		if(isset($_POST['SA'] ) && !empty($_POST['SA'] ) && $_POST['SA'] != 0)
		{
			$seats['SA']['quantity'] = (int) $_POST['SA']; 
			$seats['SA']['price'] = calcPrice($movie, $day, $time, "SA"); 
			
		}
		if(isset($_POST['SP'] ) && !empty($_POST['SP'] ) && $_POST['SP'] != 0)
		{
			$seats['SP'] = $_POST['SP'];
		}
		if(isset($_POST['SC'] ) && !empty($_POST['SC'] ) && $_POST['SC'] != 0)
		{
			$seats['SC'] = $_POST['SC'];
		}
		if(isset($_POST['FA'] ) && !empty($_POST['FA'] ) && $_POST['FA'] != 0)
		{
			$seats['FA'] = $_POST['S]FA'];
		}
		if(isset($_POST['FC'] ) && !empty($_POST['FC'] ) && $_POST['FC'] != 0)
		{
			$seats['FC'] = $_POST['FC'];
		}
		if(isset($_POST['B1'] ) && !empty($_POST['B1'] ) && $_POST['B1'] != 0)
		{
			$seats['B1'] = $_POST['B1'];
		}
		if(isset($_POST['B2'] ) && !empty($_POST['B2'] ) && $_POST['B2'] != 0)
		{
			$seats['B2'] = $_POST['B2'];
		}
		if(isset($_POST['B3'] ) && !empty($_POST['B3'] ) && $_POST['B3'] != 0)
		{
			$seats['B2'] = $_POST['B2'];
		}
		
		$reservation = array('movie'=>$movie,
		                     'day'=>$day, 
							 'time'=>$time
							 'seats'=>$seats);
		$_SESSION['cart']['screenings'][] = $reservation;
		
		

	}
	
	require_once ("includes/header.php");
?>


<?php require_once("includes/footer.php"); ?>

</html>