<!DOCTYPE html>
<html>
<?php 
	session_start();
	$cssFile = "css/movies.css";
	print_r($_POST);
	
	if(isset($_POST) && !empty($_POST))
	{
		$price = str_replace('$', '', $_POST['price']);
		echo "<p>".$price."</p>";
		$_SESSION['cart']['screening'][] = array(
			'movie' => $_POST['movie'],
			'day' => $_POST['day'],
			'time' => $_POST['time'],
			'seats' => array(
				'SA' => array(
					'qty' => 2,
					'price' => 12.00
				),
				'SC' => array(
					'qty' => 1,
					'price' => 10.00
				),
				'sub-total' => 32.00,
			)	
	);
		
		
		print_r($_SESSION);
		
		
	}
	
	require_once ("includes/header.php");
?>


<?php require_once("includes/footer.php"); ?>

</html>