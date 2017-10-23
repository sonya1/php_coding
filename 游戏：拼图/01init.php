<?php
	//phpinfo();

	session_start();
	$ge = array();
	$i=0;
	for($hang=0;$hang<3;$hang++){
		for($lie=0;$lie<3;$lie++){
			$ge[$hang][$lie] = $i++;
		}
	}
	for($ci=0;$ci<100;$ci++){
		$r1_h = rand(0,2);
		$r1_l = rand(0,2);
		$r2_h = rand(0,2);
		$r2_l = rand(0,2);

		$tmp = $ge[$r1_h][$r1_l];
		$ge[$r1_h][$r1_l] = $ge[$r2_h][$r2_l];
		$ge[$r2_h][$r2_l] = $tmp;
	}

	$_SESSION["ge"] = $ge;
	header("location:02show.php");
?>