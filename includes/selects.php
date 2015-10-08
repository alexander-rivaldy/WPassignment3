<?php

echo "
	<div class='category'>
		<label>".$label."</label>
		<select name=".$name." class='ticket' id=".$name." onchange='seatChange()'>
			<option value='0'>0</option>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
		</select>
		<label class='subtotal'>$<span id=subtotal".$name.">0.00</span></label><br>
	</div>"
?>