<?php

	function usuarioOK($nombre, $contrasena){
		if($nombre == strrev($contrasena) and strlen($nombre)>=8){
			return true;
		}
		else{
			return false;
		}
	}
	function contarLetras($frase){
		return "<b>". strlen($frase) . "</b>";
	}
	function contarPalabras($frase){
		return "<b>". str_word_count($frase). "</b>";
	}
	function letraRepetida($frase){
		$maximo = 0;
		$caracter = '';
		$frase = strtolower($frase);
		$frecuencia = count_chars ( $frase , 0);
		for ($i=97; $i <= 122; $i++) { 
			if ($frecuencia[$i] > $maximo){
			$maximo = $frecuencia[$i];
			$caracter = "<b>".strtoupper(chr($i)). "</b>";
			}
		}
		return $caracter;
		
	}
	function palabraRepetida($frase){
		$maximo = 0;
		$max_palabra = "";
		$contador = 0;
		$cadena = explode(' ', $frase);

		for ($i=0; $i < count($cadena); $i++) { 
			for ($j=0; $j < count($cadena); $j++) { 
				if($cadena[$i] == $cadena[$j]){
					$contador++;
					}
				}
			if ($contador > $maximo){
				$maximo = $contador;
				$max_palabra = $cadena[$i];
			}
			$contador = 0;
		}

		return "<b>".$max_palabra. "</b>";
	}
?>
