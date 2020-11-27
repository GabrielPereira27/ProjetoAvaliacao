<?php 
	$maior = -99999;
	$menor = 99999;
	$soma = 0;
	$prod = 1;

		$num = array();
		for ($i=0; $i < 15; $i++) 
		{ 
			$num[] = rand(1, 1000);

		}

		foreach ($num as $chave => $numeros) 
		{
			if ($numeros > $maior) 
			{
				$maior = $numeros;
			}

			if ($num < $menor)
		 	{
				$menor = $numeros;
			}

			$soma = $soma + $numeros;
			$prod = $prod * $numeros;
		}	
		$media = $soma / 15;
		
		echo 'O numero maior: ' .$maior;
		echo '<br>';
		echo 'O numero menor: ' .$menor;
		echo '<br>';
		echo 'O produto é: ' .$prod;
		echo '<br>';
		echo 'A média é: ' .$media;
?>