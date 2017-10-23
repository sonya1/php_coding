<?php
	session_start();
	$ge = $_SESSION["ge"];
	$hang = $_GET["h"];
	$lie = $_GET["l"];

	$tmp = $hang;
	if($tmp<2 && $ge[++$tmp][$lie]==8){
		$ge[$tmp][$lie] = $ge[$hang][$lie];
		$ge[$hang][$lie] = 8;
	}
	
	$tmp = $hang;
	//echo $ge[--$tmp][$lie]."<br>";
	if($tmp>0 && $ge[--$tmp][$lie]==8){
		$ge[$tmp][$lie] = $ge[$hang][$lie];
	//	echo $ge[$tmp][$lie]."----".$ge[$hang][$lie]."<br>";
		$ge[$hang][$lie] = 8;
	}

	$tmp = $lie;
	if($tmp<2 && $ge[$hang][++$tmp]==8){
		$ge[$hang][$tmp] = $ge[$hang][$lie];
		$ge[$hang][$lie] = 8;
	}

	$tmp = $lie;
	if($tmp>0 && $ge[$hang][--$tmp]==8){
		$ge[$hang][$tmp] = $ge[$hang][$lie];
		$ge[$hang][$lie] = 8;
	}


	
//print_r($ge);
	$_SESSION["ge"] = $ge;
	header("location:02show.php");
?>