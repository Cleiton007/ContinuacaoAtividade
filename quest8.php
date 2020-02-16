<?php
	if(isset($_GET['n'])){
        $quantRepeticoes = $_GET['n'];
		$x = 0;
		$soma = 0;
		while($x <= $quantRepeticoes){
			$soma = $soma + $x;
			echo("Repetições feitas ".$x. " vezes <br>");
			$x++;
		}
		echo("Soma: ".$soma);
     }
?>