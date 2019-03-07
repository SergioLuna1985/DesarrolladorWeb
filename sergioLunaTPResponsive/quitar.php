<?php
		$id = $_GET["id"];
        $sql = "UPDATE productos SET carrito = '0' WHERE productos.id='$id'";
        $conexion = mysqli_connect("localhost", "root", "", "cerveceria");
        $modificado = mysqli_query($conexion, $sql);
        header("Location: carrito.php");

?>