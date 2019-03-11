<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php
            $conexion=mysqli_connect("localhost", "root","","cerveceria");  
            $contaCarrito=mysqli_query($conexion, "SELECT * FROM productos"); 
            $carrito=0;
            while ($sumar=mysqli_fetch_Array($contaCarrito)) {
                $carrito=$carrito+$sumar["carrito"];}
    ?>
    <title>CERVECERIA SANDOVAL</title>
</head>
<body class="bodyFabrica">
    <?php
            if ($_SESSION[estado]==false){
                echo "
                    <a id='botonFlotante' data-toggle='modal' data-target='#exampleModal'><img src='imagenes/user.svg' alt='' width='20px;'>INICIAR SESION</a>
                    <div class='modal fade' id='exampleModal' tabindex='-1' role='dialo' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                      <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>INICIAR SESION</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                                <form action='login.php' method='post'>
                                    <label for='nombre'>Nombre de Usuario:</label><br>
                                    <input type='text' name='user' maxlength='32' required>
                                    <br><br>
                                    <label for='pass'>Contraseña:</label><br>
                                    <input type='password' name='pass' maxlength='32' required>
                                    <br><br>
                                    <a href='formulario.php'>Si no eres usuario, por favor Registrate</a> <br><br>
                                    <input class='btn btn-primary' type='submit' name='submit' value='INGRESAR'>
                                    <input class='btn btn-primary' type='reset' name='clear' value='BORRAR'>
                                </form>
                          </div>
                        </div>
                      </div>
                    </div>";
            }else{
                echo "<a id='botonFlotante' href='closeLogin.php?idUsuario='><img src='imagenes/user.svg' alt='' width='20px;'>CERRAR SESION</a>";
                
                }
        ?>
        
        
        
        
        
        
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
                            <a class="nav-link" href="menuCervezas.php">CERVEZAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menuPlatos.php">PLATOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fabrica.html">FABRICACION</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="venta.php">VENTA</a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="carrito.php">CARRITO <?php echo"$carrito";?></a>
                        </li>               
                    </ul>
                </div>  
                
            <?php 
       
                if (!isset($_SESSION["estado"])) { 
                  $_SESSION["estado"]=false; 
                }  

                if ($_SESSION["estado"]==false){
                    echo "<h4 class='h4Carrito'>Usuario</h4>'";
                    }else{
                    echo "<h4 class='h4Carrito'>Hola $_SESSION[username]</h4>";
           
                }
            ?>
        </nav>
    <main class="mainFabrica">
        <div>
            <div class="articleFabrica"> 
                <img src="imagenes/fabrica.jpg" alt="" class="imgFabrica">
                <video class="videoFabrica" src="videos/proceso.mp4" poster="imagenes/poster.JPG" autoplay controls ></video>
            </div>
        </div>
    </main>
    <footer>
        <p>Derechos reservados - Creado por Sergio Luna</p>
    </footer>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>