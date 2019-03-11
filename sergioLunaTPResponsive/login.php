<?php session_start();?>


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
                    $_SESSION["idUsuario"]="$unRegistro[id]";
                    header("Location: index.php");
                } else {
                    echo "user/pass incorrectos";

                }
            } else {
                echo "Usuario incorrecto";
            }
			

			
			

				
			
?>

