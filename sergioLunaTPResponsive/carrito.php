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
            
            $_SESSION["carrito"]=$carrito;
        
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
                        <a class="nav-link" href="carrito.php">CARRITOS <?php echo"$carrito";?></a>
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
    


    <main class="mainCarrito">
        <h2 class="h2Carrito">Carrito de Compras</h2>

        <section class="fondoCarrito">
            <div id="articleCarrito">
                <article class="articleCarrito">
                    <table>
                        <thead> 
                            <tr>
                                <th colspan="3">Nombre del Producto</th>
                                <th>Precio</th>
                                <th colspan="3">Cantidad</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                            <?php
                                $compraTotal=0;    
                            
                                while ($filaCarrito=mysqli_fetch_array($tablaCarrito)){
                                    $resultado=0;
                                    echo "<tr><td><a class='quitar' href='quitar.php?id=$filaCarrito[id]'><img src='imagenes/trash.svg' width='20px' alt=''></a></td>";   
                                    echo "<td><img src='$filaCarrito[imagen]' width='80' height='80' alt=''></td>";
                                    echo "<td>$filaCarrito[nombre] $filaCarrito[estilo] $filaCarrito[cantidad] $filaCarrito[tipo]$filaCarrito[presentacion]</td>";
                                    echo "<td>$$filaCarrito[precio]</td>";
                                    echo "<td><a class='restar' href='restar.php?id=$filaCarrito[id]&valor=$filaCarrito[stock]'><img src='imagenes/caret-left.svg' width='10px' alt=''></a></td>";
                                    echo "<td>$filaCarrito[stock]</td>";
                                    echo "<td><a class='sumar' href='sumar.php?id=$filaCarrito[id]&valor=$filaCarrito[stock]'><img src='imagenes/caret-right.svg' width='10px' alt=''></a></td>";
                                    $result = $filaCarrito["precio"] * $filaCarrito["stock"];
                                    echo "<td>$$result</td></tr>";
                                    
                                    $compraTotal=$compraTotal+$result;
                                }
                            
                                

                            ?>  
                        </tbody>
                    </table>
                                
                </article>
            
                <aside class="asideCarrito">
                    <?php echo "<h3 class='h3Carrito'>Total de Carrito $$compraTotal</h3>";?>                
                    <?php   
                        if ($_SESSION["estado"]==false){
                            echo "<a id='botonIniciarSesion' class='btn btn-outline-warning'  data-toggle='modal' data-target='#exampleModal'>ABRIR SESION</a>
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
                            echo "<a id='botonComprar' class='btn btn-outline-warning' href='comprar.php'>COMPRAR</a>";
                            echo "<a id=botonCerrarSesion class='btn btn-outline-warning' role='button' href='closeLogin.php?idUsuario='>CERRAR SESION</a>";
                        }
                        
                    ?>
                    
                </aside>
            </div>
        </section>
    </main>
    <footer>
        <p>Derechos reservados, Creado por Sergio Luna</p>
    </footer>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

