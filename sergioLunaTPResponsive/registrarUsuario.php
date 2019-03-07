<?php
	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "cerveceria";
	$tbl_name = "usuarios";

	$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

	$buscarUsuario = "SELECT * FROM $tbl_name WHERE usuario = '$_POST[username]' ";	
	$result = mysqli_query($conexion, $buscarUsuario);	
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
		echo "<a href='formulario.php'>Por favor escoga otro Nombre</a>";
	}
	else{
		$query = "INSERT INTO usuarios (nombre, usuario, password, email, telefono, direccion, ciudad, cp)
		VALUES ('$_POST[nombre]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[ciudad]', '$_POST[cp]')";

		if (mysqli_query($conexion, $query) === TRUE) {
			echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
			echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
			echo "<h5>" . "Hacer Login: " . "<a href='carrito.php'>Login</a>" . "</h5>";
		}
 		else {
			echo "Error al crear el usuario." . $query . "<br>"; 
		}
 	}

	mysqli_close($conexion);
?>
