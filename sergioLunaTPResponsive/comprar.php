<?php

    session_start();
        
    $conexion=mysqli_connect("localhost", "root","","cerveceria");
    $tablaCarrito=mysqli_query($conexion, "SELECT * FROM productos WHERE carrito='1'"); 
    

    while ($filaCarrito=mysqli_fetch_array($tablaCarrito)){
        $sql = "iNSERT INTO compra (idUsuario, idProducto) VALUES ('$_SESSION[idUsuario]','$filaCarrito[id]')";
        mysqli_query($conexion, $sql);
       

       
    }
   
        header("Location: carrito.php");




?>




