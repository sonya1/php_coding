<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	//echo "<meta charset='utf-8'>";
	$ge = $_SESSION["ge"];
	//var_dump($ge);
	
	echo '<table border="1" height="300" width="300" align="center">';
	for($hang=0;$hang<3;$hang++){
		echo '<tr>';
		for($lie=0;$lie<3;$lie++){
			echo '<td>';
			if($ge[$hang][$lie] == 8){

			}else{
				echo '<a href="03deal.php?h='.$hang.'&l='.$lie.'"> ';
				echo '<img src="img/'.$ge[$hang][$lie].'.jpg"/>';     
				//echo $ge[$hang][$lie];

				echo '</a>';
			}
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>

<a href="01init.php">重玩</a>