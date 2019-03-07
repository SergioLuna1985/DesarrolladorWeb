<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
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
                            <a class="nav-link" href="carrito.php">CARRITO</a>
                        </li>               
                    </ul>
                </div>  
        </nav>
        <main id="mainIndex" class="container-fluid">
            <div class="row">
                <div id="imagenFondo">
                    <img src="imagenes/fondoPrincipal.jpg" class="img-fluid center-block" alt="Responsive image">
                </div>    
            </div>
            
           
                
            
            <section id="platos" class="section3Index">
                <h2 class="h2Index" >MENÚ SANDOVAL</h2>
                <table class="tableSection3Index" >
                    <tr>
                        <td><img src="imagenes/hamburguesas2.jpg" alt=""></td>
                        <td class="columnaDesaparecer2"><img src="imagenes/papas2.jpg" alt=""></td>
                        <td class="columnaDesaparecer1"><img src="imagenes/pizzas2.jpg" alt=""></td>
                        <td class="columnaDesaparecer1"><img src="imagenes/picadas2.jpg" alt=""></td>
                    </tr>
                    <tr class="fila2Index">
                        <td><img src="imagenes/pizzas2.jpg" alt=""></td>
                        <td class="columnaDesaparecer2"><img src="imagenes/picadas2.jpg" alt=""></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="fila3Index">
                        <td><img src="imagenes/papas2.jpg" alt=""></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="fila4Index">
                        <td><img src="imagenes/picadas2.jpg" alt=""></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </section>
            <div id="local" class="section4Index">
                <div class="direccion">
                    <p>Dirección: José Bonifacio 1595, Ciudad autónoma de Buenos Aires</p>
                    <p>Horario de atención: Lunes a Sábados de 8 a 23hs.</p>
                </div>
                <img src="imagenes/brindis.jpg" alt="" class="img1" >
                <img src="imagenes/sandoval1.jpg" alt="" class="img2">
                <img src="imagenes/comida2.jpg" alt="" class="img3">
                <img src="imagenes/comida.jpg" alt="" class="img4">
                <img src="imagenes/vasos.jpg" alt="" class="img5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13132.055034218707!2d-58.4498267!3d-34.6290926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81c5cf9baf28ff67!2sCervecer%C3%ADa+Sandoval!5e0!3m2!1ses!2sar!4v1550438388533"></iframe> 
            </div>
        
        </main>
        <footer>
            <p>Derechos reservados, Creado por Sergio Luna</p>
        </footer>
        <script src="jquery/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>