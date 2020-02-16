<?php
	if(isset($_GET['rows']) && isset($_GET['cols'])){
		$quantR = 1;
		$quantC = 1;
		$rows = $_GET['rows'];
		$cols = $_GET['cols'];
		$tabela = '<table border=3>';
		for($quantR = 1; $quantR <= $rows; $quantR++ ){
			
			$tabela .= '<tr>';
			for($quantC = 1; $quantC <= $cols; $quantC++){
				$tabela .= '<td>Linha: '.$quantR.' Coluna: '.$quantC.'</td>';
			}
			$tabela .= '</tr>';	
		}
		
		$tabela .= '</table>';
		echo $tabela;
	}
?>