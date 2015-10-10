<!DOCTYPE html>
<html>
	<head>
	
	<?php
	    //php required to process the voucher input
		$letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		if(isset($_POST['voucher'] && !empty($_POST['voucher'])))
		{
			$voucher = $_POST['voucher'];
			
			$checkOne = ((($voucher[0]*$voucher[1]+$voucher[2])*$voucher[3]+$voucher[4])%26);
			
			$checkTwo = ((($voucher[6]*$voucher[7]+$voucher[8])*$voucher[9]+$voucher[10])%26);
			
			if($voucher[12] == $letters[$checkOne] && $voucher[13] == $letter[checkTwo])
			{
				echo "Ticket is VALID!!!"
				//also expected to give users a 20% discount on their price???
			}
			else
			{
				echo "Ticket is INVALID!!!"
			}
		}
	?>
	</head>
	<body>
		</form action="" method="POST">
			Voucher: <input type="text" name="voucher" 
			patter="^[0-9]{5}-{1}[0-9]{5}-{1}[A-Z]{2}" 
			title="The voucher must have code must have five digits and a '-'
			       followed by another 5 digits and a '-' followed by two capital letters." 
				   required="required">
		</form>
	</body>
</html>