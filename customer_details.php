<!DOCTYPE html>
<html>
<head>

<? php
	if (isset($_POST))
	{
		$name = $_POST["name"];
		$_SESSION["name"] = mod_input($name);
		
		$email = $_POST["email"];
		$_SESSION["email"] = mod_input($email);
		
		$phone = $_POST["phone"];
		$_SESSION["phone"] = mod_input($phone);
	}
	function mod_input($data)
	{
		trim($data);
		
	}
?>
</head>
<body>
<header>
</header>
	<form action="" method="POST">
		Name: <input type="text" name="name" pattern="^[a-zA-Z.'- ]*{1}[a-zA-Z.'-]*$ " 
				title="Name must only conatin letters and some special characters such as ' . -" required><br><br>
		Email: <input type="text" name="email" pattern="^[a-zA-Z0-9.-_]*@[a-zA-Z]*.(edu|com|org)*(.au){0,1}$" 
				title="Please enter a valid E-mail address. E.g john_Smith@abcd.com.au" required><br><br>
		Phone: <input type="text" name="phone" pattern="^((04)|\+614|04){1}[ ]?\d{4}[ ]?\d{4}$" 
				title="Australian Mobile Phone numbers must only contain digits " required><br><br>
		<input type="submit" value="Submit">
	</form>
	<footer>
	</footer>
</body>
</html>