<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
       <title>Canciones</title>
       <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/estilo.css" rel="stylesheet">
      
       <style>
       table{
          width:80%;
         /* border: 2px solid black;*/
          margin: auto;
       }
           </style>
   </head>
    
    <body>
       <header>
        <div class="container">
         <h1>Visualizando Listado de Canciones que tiene Los Borbotones</h1>   
           <h5>Sitio Musical</h5>
        </div>
        </header>
       <div class="container">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                 
                            <span class="sr-only">Menu</span>    
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                   </button>
                    <a href="Index.php" class="navbar-brand">Oh! Los Borbotones</a>
              </div>   

                
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Musica <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Solicitud de Musica</a></li>
                            <li><a href="Ver_Tabla.php">Ver Lista de Musica</a></li>                               
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    
                    </li>
                     
                    <li><a href="#">Soporte</a></li>
                    <li><a href="Inicio.php">Iniciar Sesión</a></li>
                    <li><a href="Registrarse.php">Registrarse</a></li>
                </ul>    
            </div>
            
            </div>
            </nav>
        
         </div>
         
         
         <div class="container">
            <form class="navbar-form navbar-left" role="Buscar">
             <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar Cancion">
        </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        </div>

        <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <?php
             require("Conexion.php");
             
             $conexion = mysqli_connect($dbhost,$dbuser,$dbpass);
             
             if(mysqli_connect_errno()){
                 echo "Error al conectar :(<br>";
             }else{
                 /*echo "Conectado!<br>";*/
             }
           
           mysqli_select_db($conexion,$dbname) or die("La Base de datos no existe o no fue encontrada.");
           mysqli_set_charset($conexion,"utf8");
           
           $consulta = "SELECT a.ID_CANCION,a.NOMBRE_C as 'Nombre de la cancion',b.NOMBRE_A as 'Nombre del Album',d.NOMBRE_ART as 'Artista',c.NOMBRE_G as 'Genero' ,b.FECHA_ALBUM 'Año de Lanzamiento' FROM cancion a, album b, genero c,artista d WHERE a.ID_ALBUM=b.ID_ALBUM AND c.ID_GENERO=a.ID_GENERO AND d.ID_ARTISTA=b.ID_ARTISTA";
           
           $resultado = mysqli_query($conexion,$consulta);
             
           echo "<div class='container'>";
           echo "<table class='table class-responsive'>"; 
           echo "<th></th>";
           echo "<th>Cancion</th>";
           echo "<th>Album</th>";
           echo "<th>Banda/Artista</th>";
           echo "<th>Genero</th>";
           echo "<th>Año</th>";
           while($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
               echo "<tr><td>";
               echo $fila['ID_CANCION']."</td>
               <td>";
               echo $fila['Nombre de la cancion']."</td><td>";
               echo $fila['Nombre del Album']."</td><td>";
               echo $fila['Artista']."</td><td>";
               echo $fila['Genero']."</td><td>";
               echo $fila['Año de Lanzamiento']."</td";
               echo "</tr>";
           }
           echo "</table>";
           echo "</div>";

        ?>


</body>


</html>