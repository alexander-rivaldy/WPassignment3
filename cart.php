<!DOCTYPE html>
<html>
<?php 
	session_start();
	$cssFile = "css/movies.css";
	
	if(isset($_POST) && !empty($_POST))
	{
		if(isset($_POST['movie'] ) && !empty($_POST['movie'] ) )
		{
			$_SESSION['user']['cart']['movie'] = $_POST['movie'];
		}
	}
	
	require_once ("includes/header.php");
?>


<?php require_once("includes/footer.php"); ?>

</html>