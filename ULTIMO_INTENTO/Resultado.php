<!DOCTYPE html>
<html lang="es">
   <head>
   <title>Registro Borbotones</title>
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
            
            $mail = $_POST['correo'];
            
            if(!$conexion){
                die("Conexion Fallida.");
            }
            
            $Repetido = "SELECT COUNT(*) FROM usuario WHERE CORREO = ?";
            
            $Intento = mysqli_prepare($conexion,$Repetido);
            
            if(!$Intento){
                echo "Error".mysqli_error($conexion);
            }else{
             $okey = mysqli_stmt_bind_param($Intento,"s", $mail);
             $okey = mysqli_stmt_execute($Intento);
            
            $Resultado = $conexion->query($Repetido);//
            
            $Cantidad = mysqli_num_rows($Resultado);
            }
            
            if($Cantidad == 1){
                echo "<p>Este Email ya esta registrado en nuestra pagina.</p>
                <p><a href='Inicio.php'>Intente Conectar Aqui</a></p>";
            }else{
                $Nombre = $_POST['nombre'];
                $nick = $_POST['nick'];
                $Correo = $_POST['correo'];
                $Contra = $_POST['contra'];
                
               
                $ClaveE = password_hash($Contra, PASSWORD_DEFAULT);
                
                $Base = "INSERT INTO usuario (NOMBRE,CORREO,CLAVE,NICKNAME) VALUES (?,?,?,?)";
                
                $resultado = mysqli_prepare($conexion, $Base);
                
                if(!$resultado){
                    echo "Error".mysqli_error($conexion);
                }
        
                $ok = mysqli_stmt_bind_param($resultado, "ssss", $Nombre, $Correo, $ClaveE, $nick);
                $ok = mysqli_stmt_execute($resultado);
                
                
                
                if(!$ok){
                    echo "Error en la consulta, <p><a href='Inicio.php'>Volver</a></p>";
                }else{
                    echo "<p><a href='Inicio.php'>Cuenta creada, Bienvenido!</a></p>";
                }
                echo "parametros: $Nombre,<br> $Correo,<br> $nick,<br> $Contra,<br> $ClaveE,<br> $Base";
                /*
                if(mysqli_query($conexion,$Base)){
                    echo "<p><a href='Inicio.php'>Cuenta creada, Bienvenido!</a></p>";
                }else{
                    echo "Error al intentar ingresar, lo sentimos. ";
                }*/
                
                
            }
            
            
            mysqli_close($conexion);
        ?>
            
        
        </div>
    
    
    <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    
    </body>
</html>