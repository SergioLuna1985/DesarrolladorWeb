<?php session_start();?>
   

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
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
                  $_SESSION["estado"]=false; }  

                if ($_SESSION["estado"]==false){
                    echo "<h4 class='h4Carrito'>Usuario</h4>'";
                    }else{
                    echo "<h4 class='h4Carrito'>Hola $_SESSION[username]</h4>";}
            ?>
        </nav>
        <main id="mainMenuCervezas">
            <div class="row" id="fondoMenuCervezas">
                <div class="col-12">
                    <div class="row align-items-center" id="cervezas">
                        <div class="col-md-4 align-self-end">
                        </div>
                        <div class="col-12  col-md-7 align-self-end">
                            <h2 class="h2MenuCervezas">NUESTRA VARIEDAD</h2>
                        </div>
                        <div class="col-2 col-sm-2 col-md-4 align-self-center">
                        </div>
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="stout.html"><img src ="imagenes/stout2.JPG" class="img-fluid center-block" alt="Responsive image"></a> 
                        </div>  
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="golden.html"><img src ="imagenes/golden2.jpg" class="img-fluid center-block" alt="Responsive image"></a>    
                        </div>
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="apa.html"><img  src="imagenes/apa2.jpg" class="img-fluid center-block" alt="Responsive image"></a>    
                        </div> 
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="scotch.html"><img  src="imagenes/scotch2.jpg" class="img-fluid center-block" alt="Responsive image"></a>    
                        </div> 
                        <div class=" d-none d-md-block col-md-4 align-self-center" >
                        </div> 
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="porter.html"><img src ="imagenes/porter2.JPG" class="img-fluid center-block" alt="Responsive image"></a>
                        </div> 
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="ipa.html"><img src ="imagenes/ipa2.jpg" class="img-fluid center-block" alt="Responsive image"></a>
                        </div> 
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="honey.html"><img  src="imagenes/honey2.jpg" class="img-fluid center-block" alt="Responsive image"></a>
                        </div> 
                        <div class="col-4 col-sm-4 col-md-2 align-self-center" >
                            <a href="irishRed.html"><img src="imagenes/irishRed2.jpg" class="img-fluid center-block" alt="Responsive image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <footer>
        <p>Derechos reservados, Creado por Sergio Luna</p>
    </footer>
    <script src="js/jquery-3.3.1.slim.min.js"></script>      
    <script src="js/popper.min.js"></script>      
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>