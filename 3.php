<?php 
	$num = array();
	for ($i=0; $i < 15; $i++) { 
		$num[] = rand(1, 1000);
	}

	foreach ($num as $chave => $numeros) {
		if($numeros % 2==0)
		{
			echo 'Posição ' .$chave. 'numero ' .$numeros. 'par';		
		}
		else
		{
			echo 'Posição ' .$chave. 'numero '.$numeros. 'impar';	
		}
		echo "<br>";
	}
?>