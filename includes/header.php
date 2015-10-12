<?php
$cartItem = (int)0;
if(isset($_SESSION) && !empty($_SESSION))
{
	foreach($_SESSION['cart']['screenings'] as $value)
	{
		++$cartItem;
	}
}
echo '
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	<title>Silverado Cinemas</title>
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,700,600,500" rel="stylesheet" type="text/css">
	<link href='.$cssFile.' rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div class="container">
  <div id="header">
  	<a href="index.php"><img src="images/silverado(1).png" id="logo" alt="Silverado Cinemas"/></a>
  </div>
  <div id="nav">
  	<ul>
      <li id="movies"><a href="movies.php">Movies</a></li>
      <li id="tickets"><a href="tickets.php">Tickets</a></li>
      <li id="contact"><a href="contact.php">Contact</a></li>
      <li id="about"><a href="about.php">About</a></li>
      <li id="cart"><a href="cart.php">('.$cartItem.')<img src="images/cart(1).png" class="cart" alt="Menu"/></a>
    </ul>
  </div>'
?>