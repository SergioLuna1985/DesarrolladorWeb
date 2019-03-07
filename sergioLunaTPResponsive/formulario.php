<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <?php
            $conexion=mysqli_connect("localhost", "root","","cerveceria");
            $botella=mysqli_query($conexion, "SELECT * FROM productos WHERE tipo='Botella'");  
            $lata=mysqli_query($conexion, "SELECT * FROM productos WHERE tipo='Lata'");      
            $contaCarrito=mysqli_query($conexion, "SELECT * FROM productos"); 
            $carrito=0;
            while ($sumar=mysqli_fetch_Array($contaCarrito)) {
                $carrito=$carrito+$sumar["carrito"];
            }

            $tablaCarrito=mysqli_query($conexion, "SELECT * FROM productos WHERE carrito='1'"); 




            $cantRegisBotella=mysqli_num_rows($botella);
            $cantRegisLata=mysqli_num_rows($lata);
        ?>
        
 



        <title>CERVECERIA SANDOVAL</title>
    </head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <img src="imagenes/logo.jpg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menuCervezas.html">CERVEZAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#platos">PLATOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#local">LOCAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fabrica.html">FABRICACION</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>     
                    <li class="nav-item">
                        <a class="nav-link" href="venta.php">VENTA</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php">CARRITO <?php echo"$carrito";?></a>
                    </li>         
                </ul>
            </div>  
    </nav>
    


    <main class="mainRegistrarUsuario">
        <h3 class="h3Carrito">
        Registrar Usuario
        </h3>
            <div class="formulario">
                <form action="registrarUsuario.php" method="post">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" maxlength="32" required>
                    <br>
                    <label for="usuario">Usuario:</label><br>
                    <input type="text" name="username" maxlength="32" required>
                    <br>
                    <label for="pass">Contraseña:</label><br>
                    <input type="password" name="password" maxlength="8" required>
                    <br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" maxlength="32" required>
                    <br>
                    <label for="telefono">Teléfono:</label><br>
                    <input type="text" name="telefono" maxlength="32" required>
                    <br>
                    <label for="direccion">Dirección:</label><br>
                    <input type="text" name="direccion" maxlength="32" required>
                    <br>
                    <label for="ciudad">Ciudad:</label><br>
                    <input type="text" name="ciudad" maxlength="32" required>
                    <br>
                    <label for="cp">Código Postal:</label><br>
                    <input type="text" name="cp" maxlength="32" required>
                    <br><br>
                    <input class="btn btn-primary" type="submit" name="submit" value="REGISTRARSE">
                    <input class="btn btn-primary" type="reset" name="clear" value="BORRAR">
                </form>
            </div>
    </main>
    <footer>
        <p>Derechos reservados, Creado por Sergio Luna</p>
    </footer>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

