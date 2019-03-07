<?php
        $id = $_GET["id"];
        $valor = $_GET["valor"];
        
        if ($valor<10){
        $valor=$valor+"1";
        }
        
        $sql = "UPDATE productos SET stock = $valor WHERE productos.id='$id'";
        $conexion = mysqli_connect("localhost", "root", "", "cerveceria");
        $modificado = mysqli_query($conexion, $sql);
        header("Location: carrito.php");

?>