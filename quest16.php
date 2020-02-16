<?php
	if(isset($_GET['num'])){
		$num = $_GET['num'];
		$x = 0;
		while($x <= 10){
		echo($num." x ".$x." = ".$num*$x);
		echo("<br>");
		$x++;
	}
	}
?>