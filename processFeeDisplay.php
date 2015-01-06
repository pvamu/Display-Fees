<?php
// Revised: 8/22/2014
// Software Engineer: Ronald E. Hernandez

$sYear = $_POST["YEAR"];		// year of cohort
$sPath = "http://www.pvamu.edu/fsrv/fee-display/fee_".$sYear."_";

if($_POST["STATUS"] == "emba")
{
	$sSelection = "emba";	
}
else
{
	$sType = $_POST["TYPE"];			// campus or online
	$sStatus = $_POST["STATUS"];		// undergrad or graduate
	$sResidency = $_POST["RESIDENCY"];	// resident or non-resident

	$sSelection = $sType."_".$sStatus."_".$sResidency;
}

$sURL = $sPath.$sSelection;

header("Location: ".$sURL, false);

?>
