<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="web/default.css">
</head>
<body>
	<form name='entrada'method="POST" action="index.php">
	<table>
	<tr>
		<td>Nombre:</td>
		<td>
			<input type="text" name="nombre" value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>">
		</td>
	</tr>
	<tr>
		<td>Contraseña: </td>
		<td>
			<input type="password" name="contraseña" value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>">
		</td>
	</tr>
	</table>
	<input type="submit"name="orden"value="Entrar">
	</form>
</body>
</html>