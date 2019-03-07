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
        
		<title>CERVECERIA SANDOVAL</title>
    </head>

	<body>



		<?php
			$host_db = "localhost";
			$user_db = "root";
			$pass_db = "";
			$db_name = "cerveceria";
			$tbl_name = "usuarios";
		


			$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
			

			$buscarUsuario = "SELECT * FROM $tbl_name WHERE usuario = '$_POST[user]'";	

			//echo $buscarUsuario;
			$result = mysqli_query($conexion, $buscarUsuario);	
			$unRegistro = mysqli_fetch_array($result);

			
            if ($unRegistro) { // Existe el usuario
                if ($_POST['pass']== $unRegistro['password']) {
                    $_SESSION["estado"]=true;
                    $_SESSION["username"]="$unRegistro[nombre]";
                    header("Location: carrito.php");
                } else {
                    echo "user/pass incorrectos";

                }
            } else {
                echo "Usuario incorrecto";
            }
			

			
			

				
			

		?>


		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>