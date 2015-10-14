<?php
	session_start();
	
	if(isset($_POST['firstname']) && !empty($_POST['firstname']))
	{
		$_SESSION['name'] = $_POST['firstname']." ".$_POST['lastname'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['phone'] = $_POST['phonenumber'];
	}
	$cssFile = "css/checkout.css";
	require_once("includes/header.php");
	
	file_put_contents('tmp/customerdata.json', json_encode($_SESSION))
?>
<link href='https://fonts.googleapis.com/css?family=Expletus+Sans:400,700,600,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

<div id="main">
	<div id="subheader">
		<h2>Booking Confirmation</h2>
	</div>
	<?php
		$url = "https://".$_SERVER['SERVER_NAME']."/~e54061/wp/moviesJSON.php";
		$content = file_get_contents($url);
		$movies = json_decode($content, true);
		foreach($_SESSION['cart']['screenings'] as $value)
		{
			echo "
			<div class='moviebox'>
				<div class='summary'>
					<img src='".$movies[$value['movie']]['poster']."' alt='".$movies[$value['movie']]['title']."' />
					<h2>".$movies[$value['movie']]['title']."</h2>
					<h6>Showing at</h6>
					<h3>".$value['day'].", ".$value['time']."</h3>
					<div class='category'>
						<ul>";
			foreach($value['seats'] as $type => $seatArray)
			{
				if($type == "SA")
					echo "<li>Standard Adult";
				if($type == "SP")
					echo "<li>Standard Concession";
				if($type == "SC")
					echo "<li>Standard Child";
				if($type == "FA")
					echo "<li>First Class Adult";
				if($type == "FC")
					echo "<li>First Class Child";
				if($type == "B1")
					echo "<li>Beanbag 1";
				if($type == "B2")
					echo "<li>Beanbag 2";
				if($type == "B3")
					echo "<li>Beanbag 3";
				echo " - ".$seatArray['quantity']."</li>";
			}
			echo"
						</ul>
						<h3>Total: $";
						if(isset($_SESSION['voucher']))
							echo sprintf('%0.2f',  $value['subtotal'] * 0.8);
						else
							echo sprintf('%0.2f', $value['subtotal']);
					echo"</h3>
					</div>
					<a href=''> Print Tickets</a>
				</div>
				<div class='ticketbox'>
					<div class='tickets'>
						<div class='left'>
							<div class='details'>
								<h3>".$_SESSION['name']."</h3>
								<h6>".$_SESSION['email']."</h6>
								<h6>".$_SESSION['phone']."</h6>
							</div>";
			foreach($value['seats'] as $type => $seatArray)
			{
				echo "<p>".$seatArray['quantity']." x ";
				if($type == "SA")
					echo "Standard Adult";
				if($type == "SP")
					echo "Standard Concession";
				if($type == "SC")
					echo "Standard Child";
				if($type == "FA")
					echo "First Class Adult";
				if($type == "FC")
					echo "First Class Child";
				if($type == "B1")
					echo "Beanbag 1";
				if($type == "B2")
					echo "Beanbag 2";
				if($type == "B3")
					echo "Beanbag 3";
				echo " - $".sprintf('%0.2f', $seatArray['quantity'] * $seatArray['price'])."</p>";
			}
			if(isset($_SESSION['voucher']))
			{
				echo "<h3>Voucher Discount (20%)</h3>";
			}
			echo"
							<h3>Total: <span class='total'>$";
							if(isset($_SESSION['voucher']))
								echo sprintf('%0.2f',  $value['subtotal'] * 0.8);
							else
								echo sprintf('%0.2f', $value['subtotal']);
			echo"
							</span></h3>
						</div>
						<img src='images/silverado(4).png' alt='Silverado Cinemas'/>
						<div class='right'>
							<h3>".$movies[$value['movie']]['title']."</h3>
							<h6>".$value['day'].", ".$value['time']."</h6>
						</div>
					</div>";
			foreach($value['seats'] as $type => $seatArray)
			{
				if($type == "SA" || $type =="SP" || $type == "SC")
					$typeClass = "Standard";
				if($type == "FA" || $type =="FC")
					$typeClass = "First Class";
				if($type == "B1" || $type =="B2" || $type == "B3")
					$typeClass = "Standard";
				if($type == "SA")
					$typeDesc = "Adult";
				if($type == "SP")
					$typeDesc = "Concession";
				if($type == "SC")
					$typeDesc = "Child";
				if($type == "FA")
					$typeDesc = "Adult";
				if($type == "FC")
					$typeDesc = "Child";
				if($type == "B1")
					$typeDesc = "1 Person";
				if($type == "B2")
					$typeDesc = "2 People";
				if($type == "B3")
					$typeDesc = "3 Children";
				for($i = 0; $i < (int)$seatArray['quantity']; $i++)
				{
					echo "
					<div class='tickets'>
						<div class='left'>
							<div class='details'>
								<h3>".$typeClass."</h3>
								<h6>".$typeDesc."</h6>
								<h6>$".sprintf('%0.2f', $seatArray['price'])."</h6>
							</div>
						</div>
						<img src='images/silverado(4).png' alt='".$movies[$value['movie']]['title']."' />
						<div class='right'>
							<h3>".$movies[$value['movie']]['title']."</h3>
							<h6>".$value['day'].", ".$value['time']."</h6>
						</div>
					</div>
					";
				}
			}
					
			echo"
				</div>
			</div>
			";
		}
		
	?>
	<div id="subheader">
		<h3>GRAND TOTAL: <?php echo $_SESSION['grand-total']; ?></h3>
	</div>
</div>
	

<?php
unset($_SESSION);
		session_destroy();
	require_once("includes/footer.php");
?>