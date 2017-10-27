<?php
	session_start();
	$ge = $_SESSION["ge"];
	$hang = $_GET["h"];
	$lie = $_GET["l"];

	/*$tmp = $hang;
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
	}*/
	if($hang<2 && $ge[$hang+1][$lie]==8){
		$ge[$hang+1][$lie] = $ge[$hang][$lie];
		$ge[$hang][$lie] = 8;
	}
	if($hang>0 && $ge[$hang-1][$lie]==8){
		$ge[$hang-1][$lie] = $ge[$hang][$lie];
	//	echo $ge[$tmp][$lie]."----".$ge[$hang][$lie]."<br>";
		$ge[$hang][$lie] = 8;
	}

	if($lie<2 && $ge[$hang][$lie+1]==8){
		$ge[$hang][$lie+1] = $ge[$hang][$lie];
		$ge[$hang][$lie] = 8;
	}
	if($lie>0 && $ge[$hang][$lie-1]==8){
		$ge[$hang][$lie-1] = $ge[$hang][$lie];
	//	echo $ge[$tmp][$lie]."----".$ge[$hang][$lie]."<br>";
		$ge[$hang][$lie] = 8;
	}

//print_r($ge);
	$_SESSION["ge"] = $ge;
	header("location:02show.php");
?>