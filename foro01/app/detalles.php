<?php
	echo "
	<table><tr><td>Longitud:</td><td>",contarLetras($_REQUEST['comentario']),"</td></tr>
	<tr><td>Nº de palabras:</td><td>",contarPalabras($_REQUEST['comentario']),"</td></tr>
	<tr><td>Letra + repetida:</td><td>",letraRepetida($_REQUEST['comentario']),"</td></tr>
	<tr><td>Palabra + repetida:</td><td>",palabraRepetida($_REQUEST['comentario']),"</td></tr>
	";
?>