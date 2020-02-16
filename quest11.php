<?php
	$quant = 1;
	$rows = 0;
	$cols = 0;
	$tabela = '<table border=3>';
	while($quant <=10){
		
		$tabela .= '<tr>';
		$tabela .= '<td>1</td>';
		$tabela .= '<td>2</td>';
		$tabela .= '<td>3</td>';
		$tabela .= '<td>4</td>'; 
		$tabela .= '<td>5</td>';
		$tabela .= '</tr>';
		
		$quant++;
    }
	
    $tabela .= '</table>';
	echo $tabela;
?>