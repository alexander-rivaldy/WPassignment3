<?php
echo "
	<div class='moviebox'>
    	<img src='".$obj->$type->poster."' alt=".$obj->$type->title."/>
        <div class='box'>
        	<div class='infobox'>
                <h2>".$obj->$type->title."</h2>
                <h6>PG | 94 min | Children</h6>
                <p>".$obj->$type->summary."</p>
            </div>
            <div class='moreinfo'>
            	<details>
                	<summary>More Info</summary>
                	<p>".implode($obj->$type->description)."</p>
                    <div id='screenings'>
                    	<h3>Session Times:</h3>";
	if(array_key_exists('Monday',$obj->$type->screenings) )
	{
		echo "
						<div class='session'>
                        	<p>Mon - Tue:".$obj->$type->screenings->Monday."</p>
                        </div>
				";
	}
	if(array_key_exists('Wednesday',$obj->$type->screenings) )
	{
		echo "
						<div class='session'>
                        	<p>Wed - Fri:".$obj->$type->screenings->Wednesday."</p>
                        </div>
				";
	}
	if(array_key_exists('Saturday',$obj->$type->screenings) )
	{
		echo "
						<div class='session'>
                        	<p>Sat - Sun:".$obj->$type->screenings->Saturday."</p>
                        </div>
				";
	}
echo"
                    </div>
                </details>
            </div>
        </div>
        <a href='tickets.php'>Book Tickets</a>
    </div>";
?>