<?php
session_start();
?>


<!DOCTYPE HTML>
<html lang="es">
   <head>
    <title>Verificacion de datos</title>
       <meta charset=utf-8>
       
       <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
       <link href="css/bootstrap.min.css" rel="stylesheet">
    
       <link href="css/estilo.css" rel="stylesheet">
       
    </head>
    
    <body>
    
        <div class="container">
          <?php
            include 'Conexion.php';
            
            $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            
            if(!$conexion){
                die("Conexion Fallida.");
                mysqli_connect_error();
            }
             
            $mail = $_POST['mail'];
            $pass = $_POST['contra'];
            
            $Resultado = mysqli_query($conexion, "SELECT CORREO, CLAVE, NOMBRE FROM usuario WHERE CORREO = '$mail'");
            
            $fila = mysqli_fetch_assoc($Resultado);
                
            $hash = $fila['CLAVE'];
			
			if (password_verify($_POST['contra'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $fila['NOMBRE'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (10 * 60) ;						
				
				echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido de nuevo!</strong> $fila[NOMBRE ]			
				<p><a href='edit-profile.php'>Editar Perfil</a></p>	
				<p><a href='logout.php'>Logout</a></p></div>";
                echo "<br/>";
                echo "<p> <a href='Index.php' Index</a></p>";
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Correo or Contraseña Incorrecto/a!
				<p><a href='Inicio.php'><strong>Volver</strong></a></p></div>";			
			}	
			
            
                
            
           
          ?>
        </div>
        <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>