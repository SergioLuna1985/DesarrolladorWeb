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
    <body>
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
                echo "<a id='botonFlotante' href='closeLogin.php?idUsuario='><img src='imagenes/user.svg' alt='' width='20px;'>CERRAR SESION</a>";}
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
                            <a class="nav-link" href="fabrica.php">FABRICACION</a>
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
                  $_SESSION["estado"]=false;}  

                if ($_SESSION["estado"]==false){
                    echo "<h4 class='h4Carrito'>Usuario</h4>'";
                    }else{
                    echo "<h4 class='h4Carrito'>Hola $_SESSION[username]</h4>";}
            ?>
        </nav>
        <main id="mainIndex" class="container-fluid">
           <div class="row">
                <div id="imagenFondo">
                    <img src="imagenes/fondoPrincipal1.jpg" class="img-fluid center-block" alt="Responsive image">
                </div>    
            </div>
            
            <div class="row">
                <h2 class="h2Index">Pasión por la Cerveza</h2>
            </div>
            
            <div class="row">
                <div class="col-12 col-md-8">
                    <img src="imagenes/foto1.JPG" height="500px;" alt=""class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-12 col-md-4">
                    <p class="p1">Ubicado en Caballito, un barrio lleno de edificios modernos, con mucha iluminación y uno de los más importantes polos gastronómicos en crecimiento de la Ciudad de Buenos Aires, se encuentra Cervecería Sandoval, un lugar que cuenta con un salón principal con mesas bajas y altas, una barra con canillas de ricas cerveza, y una zona al aire libre, ideal para disfrutar en verano.
                    </p>
                </div>
            </div>
            <div class="row" id="fila2Index">
                <div class="col-4">
                    <img src="imagenes/foto2.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div> 
                <div class="col-4">  
                    <img src="imagenes/foto4.JPG" alt=""class="img-fluid center-block" alt="Responsive image">
                </div> 
                <div class="col-4">
                    <img src="imagenes/foto3.jpg"  alt=""class="img-fluid center-block" alt="Responsive image">    
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <p class="p1">En la cervecería se destacan su gran variedad de tapeos, en los que encontraras papas fritas, nuggets, mozzarellas, camarones, rabas y muchas más cosas. Además sirven diferentes cervezas de botella y tiradas como la ya conocida Patagonia. La Cervecería Sandoval, es un sitio donde disfrutaras excelentes cervezas bien frías, acompañadas de exquisitos y abundantes platos, tiene excelente atención y un ambiente único y agradable.
                    </p>
                </div>
                <div class="col-12 col-md-8">
                    <img src="imagenes/foto5.JPG" height="500px;" alt="">
                </div>
            </div>
            <div class="row" id="fila4Index">
                <div class="col-4">
                    <img src="imagenes/foto7.jpg"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto8.jpg"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto9.jpg"  alt="" class="img-fluid center-block" alt="Responsive image">    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="imagenes/foto6.JPG" alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
            </div>
            <div class="row" id="fila6Index">
                <div class="col-4">
                    <img src="imagenes/foto10.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto15.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto11.JPG" alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="imagenes/foto12.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto13.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="imagenes/foto14.JPG" alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
            </div>
             <div class="row" id="fila8Index">
                <div class="col-6">
                    <img src="imagenes/foto16.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
                <div class="col-6">
                    <img src="imagenes/foto17.JPG"  alt="" class="img-fluid center-block" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br>
                    <hr style="border: 1px grey solid;">
                    <br>
                </div>
                
            </div>
            <div class="row" id="fila9Index">
                <div class="col-3">
                    <h3 class="h3Index">CONTACTO</h3>
                    <hr>
                    <p class="p2">Dirección: José Bonifacio 1595 -</p>
                    <p class="p2">Caballito - CABA</p>
                    <br>
                    <p class="p2">E / cerveceriasandoval@gmail.com</p>
                    <p class="p2">T / 11 3682-6533</p>
                </div>
                <div class="col-3">
                    <h3 class="h3Index">HORARIOS</h3>
                    <hr>
                    <p class="p2">Lunes a Jueves</p>
                    <p class="p2">18:30 - 00:30</p>
                    <p class="p2">Viernes</p>
                    <p class="p2">18:30 - 03:00</p>
                    <p class="p2">Sábado</p>
                    <p class="p2">12:00 - 03:00</p>
                    <p class="p2">Domingo</p>
                    <p class="p2">12:00 - 00:30</p>
                    <br>
                </div>
                <div class="col-6">
                        <h3 class="h3Index">ENCONTRANOS EN CABALLITO</h3>
                        <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13132.055034218707!2d-58.4498267!3d-34.6290926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81c5cf9baf28ff67!2sCervecer%C3%ADa+Sandoval!5e0!3m2!1ses!2sar!4v1550438388533">
                        </iframe>
                </div>
            </div>
            

        </main>
        <footer>
            <p>Creado por Sergio Luna</p>
        </footer>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>