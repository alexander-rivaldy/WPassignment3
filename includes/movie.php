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
                	<p>".$obj->$type->description."</p>
                    <div id='sessions'>
                    	<h3>Session Times:</h3>
                    	<div class='session'>
                        	<p>Mon - Tue: 1 PM</p>
                        </div>
                        <div class='session'>
                        	<p>Wed - Fri: 6 PM</p>
                        </div>
                        <div class='session'>
                        	<p>Sat - Sun: 12 PM</p>
                        </div>
                    </div>
                </details>
            </div>
        </div>
        <a href='tickets.php'>Book Tickets</a>
    </div>"
?>