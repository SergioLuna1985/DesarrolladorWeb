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
            $_SESSION["contCarrito"]=$carrito;

            $cantRegisBotella=mysqli_num_rows($botella);
            $cantRegisLata=mysqli_num_rows($lata);
        ?>
        
        <script>
            var current = 0;
            var imagenes = new Array();
            
            $(document).ready(function() {
                var numImages = <?php echo"$cantRegisBotella";?>;
                if (numImages <= 3) {
                    $('.right-arrow').css('display', 'none');
                    $('.left-arrow').css('display', 'none');
                }
            
                $('.left-arrow').on('click',function() {
                    if (current > 0) {
                        current = current - 1;
                    } else {
                        current = numImages - 3;
                    }
            
                    $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
            
                    return false;
                });
            
                $('.right-arrow').on('click', function() {
                    if (numImages > current + 3) {
                        current = current+1;
                    } else {
                        current = 0;
                    }
            
                    $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
            
                    return false;
                }); 
            });
        </script>

        <script>
            var current = 0;
            var imagenes = new Array();
            
            $(document).ready(function() {
                var numImages =  <?php echo"$cantRegisLata";?>;
                if (numImages <= 3) {
                    $('.right-arrow2').css('display', 'none');
                    $('.left-arrow2').css('display', 'none');
                }
            
                $('.left-arrow2').on('click',function() {
                    if (current > 0) {
                        current = current - 1;
                    } else {
                        current = numImages - 3;
                    }
            
                    $(".carrusel2").animate({"left": -($('#product_'+current).position().left)}, 600);
            
                    return false;
                });
            
                $('.right-arrow2').on('click', function() {
                    if (numImages > current + 3) {
                        current = current+1;
                    } else {
                        current = 0;
                    }
            
                    $(".carrusel2").animate({"left": -($('#product_'+current).position().left)}, 600);
            
                    return false;
                }); 
                });
        </script>


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
                  $_SESSION["estado"]=false; 
                }  

                if ($_SESSION["estado"]==false){
                    echo "<h4 class='h4Carrito'>Usuario</h4>'";
                    }else{
                    echo "<h4 class='h4Carrito'>Hola $_SESSION[username]</h4>";
           
                }
            ?>
        </nav>

    <main class="mainVentas">
        <section>
            <article>
                <div class="fondoCarrusel1">
                    <div id="carrusel">
                        <a href="#" class="left-arrow"><img src="imagenes/caret-left.svg" width="20px"/></a>
                        <a href="#" class="right-arrow"><img src="imagenes/caret-right.svg"  width="20px" /></a>
                        <div class="carrusel">
                            <?php

                            while ($filaBot=mysqli_fetch_array($botella)){

                                echo "<div class='product' id='product_$filaBot[id]'>";
                                echo "<img src='$filaBot[imagen]' width='100' height='100'/>";
                                echo "<p>$filaBot[nombre] $filaBot[estilo] de $filaBot[cantidad] en $filaBot[tipo] por $filaBot[presentacion]</p>";
                                echo "<p>$$filaBot[precio]</p>";
                                echo "<a class='btn btn-outline-warning' href='agregar.php?id=$filaBot[id]'>Agregar al carrito</a>";
                                echo "</div>";
                                
                            }
                            
                            
                            ?>  

                         
                        </div>
                        
                    </div>
                </div>

                <div class="fondoCarrusel2">
                        <div id="carrusel2">
                            <a href="#" class="left-arrow2"><img src="imagenes/caret-left.svg" width="20px" /></a>
                            <a href="#" class="right-arrow2"><img src="imagenes/caret-right.svg" width="20px"/></a>
                            <div class="carrusel2">
                                <?php

                                    while ($filaLata=mysqli_fetch_array($lata)){

                                        echo "<div class='product' id='product_$filaLata[id]'>";
                                        echo "<img src='$filaLata[imagen]' width='100' height='100'/>";
                                        echo "<p>$filaLata[nombre] $filaLata[estilo] de $filaLata[cantidad] en $filaLata[tipo] por $filaLata[presentacion]</p>";
                                        echo "<p>$$filaLata[precio]</p>";
                                        echo "<a class='btn btn-outline-warning' href='agregar.php?id=$filaLata[id]'>Agregar al carrito</a>";
                                        echo "</div>";

                                    }
                                ?>  
                                
                                
                            </div>
                        </div>
                    </div>
            </article>
        </section>
    </main>
    <footer>
        <p>Derechos reservados, Creado por Sergio Luna</p>
    </footer>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

