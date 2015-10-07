<!DOCTYPE html>
<html>
	<head>
	<?php
	$name="";
	$email="";
	$telephone="";
		if (isset($_POST) && !empty($_POST))
		{
			if(isset($_POST['name'] ) && !empty($_POST['name'] ) )
			{
				$name = $_POST['name'];
			}
			if(isset($_POST['email'] ) && !empty($_POST['email'] ) )
			{
				$email = $_POST['email'];
			}
			if(isset($_POST['telephone'] ) && !empty($_POST['telephone'] ) )
			{
				$telephone = $_POST['telephone'];
			}
			
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['telephone'] = $telephone;
		}
	?>	
	</head>
	<body>
	</body>
</html>