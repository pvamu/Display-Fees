<?php
/*
	Revised: 7/8/2014
	Plugin Name: PVAMU Fee Display
	Version: 1.0
	Plugin URI: http://www.pvamu.edu
	Description: Allows a student to display fees online
	Author: Ronald E. Hernandez
	Author URI: http://www.pvamu.edu
	License: GPL2
*/

/* Start adding Data Below this Line */

/* Start Adding Functions Below this Line */

function showForm()
{
	$str = "";

	$str = $str."<Form action='/wp-content/plugins/FeeDisplay/processFeeDisplay.php' method='post' target='new'>";
	$str = $str."<table>";
	$str = $str."<tr>";
	$str = $str."<td align='left'>Year:</td>";
	$str = $str."<td>";
	$str = $str."<select name='YEAR'>"; 
	$str = $str."   <option value='2014'>2014</option>";
	$str = $str."</select>";
	$str = $str."</td>";
	$str = $str."<tr>";
	$str = $str."<td align='left'>Type of Course:</td>";
	$str = $str."<td>";
	$str = $str."<select name='TYPE'>"; 
	$str = $str."   <option value='campus'>Campus</option>";
	$str = $str."   <option value='online' >Online</option>";
	$str = $str."</select>";
	$str = $str."</td>";
	$str = $str."</tr>";
	$str = $str."<tr>";
	$str = $str."<td align='left'>Status:</td>";
	$str = $str."<td>";
	$str = $str."<select name='STATUS'>"; 
	$str = $str."   <option value='undergrad'>Undergraduate</option>";
	$str = $str."   <option value='emba'>Executive MBA</option>";
	$str = $str."   <option value='grad'>Graduate or Doctoral</option>";
	$str = $str."</select>";
	$str = $str."</td>";
	$str = $str."</tr>";
	$str = $str."<tr>";
	$str = $str."<td align='left'>Residency:</td>";
	$str = $str."<td>";
	$str = $str."<select name='RESIDENCY'>";
	$str = $str."   <option value='resident' >Resident</option>";
	$str = $str."   <option value='nonresident' >Non-Resident</option>";
	$str = $str."</select>";
	$str = $str."</td>";
	$str = $str."</tr>";
	$str = $str."<tr>";
	$str = $str."<td align='left' colspan='2'>";
	$str = $str."<hr>";
	$str = $str."</td>";
	$str = $str."</tr>";
	$str = $str."<tr>";
	$str = $str."<td align='center'>";
	$str = $str."   <input type='submit' value='Display'>";
	$str = $str."</td>";
	$str = $str."<td align='left'>";
	$str = $str."<a href='http://www.pvamu.edu/include/Web%20Services/manuals/fee-display-manual.pdf' target='_blank'>Fee Display User Manual</a>";
	$str = $str."</td>";
	$str = $str."</tr>";
	$str = $str."</table>";
	$str = $str."</form>";

return $str;
}	
/* Start Adding Shortcodes Below this Line */

add_shortcode( 'pv_fee_display', 'showForm' );

?>