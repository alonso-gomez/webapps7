<p>Captura los siguientes datos para calcular el sueldo de un empleado y ver el desglose del mismo.</p>
<hr>
<form action="index.php" method="get">
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre" value="<?php if(isset($_GET['nombre'])) echo $_GET['nombre']; ?>">
	<br><br>

	<label for="apellidos">Apellidos:</label>
	<input type="text" name="apellidos" value="<?php if(isset($_GET['apellidos'])) echo $_GET['apellidos']; ?>">
	<br><br>

	<label for="ht">Horas trabajadas:</label>
	<input type="text" name="ht" value="<?php if(isset($_GET['ht'])) echo $_GET['ht']; ?>">
	<br><br>

	<input type="submit" value="Calcular sueldo" name="sent">
</form>
<?php if(isset($error)) printMsg($error); ?>