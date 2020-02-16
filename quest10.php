<?php
	$x = 0;
	$soma = 0;
	while($soma<=1000){
		$x = rand(0,100);
		$soma = $soma + $x;
		echo("Numero aleatorio: ".$x);
		echo("<br>");
		echo("Soma: ".$soma);
		echo("<br>");
	}
?>