<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Oh! Los Borbotones</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/estilo.css" rel="stylesheet">
</head>
    <body>
       <header>
        <div class="container">
           <h1>Ingrese los datos correspondientes</h1>
           </div>
        </header>
        <main>
            <div class="container">
                <h2>Iniciar Sesión</h2>
                
                <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                 
                            <span class="sr-only">Menu</span>    
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                   </button>
                    <a href="#" class="navbar-brand">Oh! Los Borbotones</a>
              </div>   
                
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Musica<span class="caret"></span>
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
                <br>
            <form method="post" action="Resultado2.php" method="POST">
                <div class="form-group">
                    
 
                <div class="form-group">
                    <label for="mail">Correo</label>
                    <input type="text" name="mail" class="form-control"  placeholder="Correo" required>
                </div>
                
                
                <div class="form-group">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="contra" required>
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Entrar al Portal!</button>
                </div>
             </form>    
              </div>
            
            <div class="container">
         <div class="row">
            <div class="col-xs-6">
                
            <p><strong>Contacto</strong></p> 
                
                <div class="col-md-2">
                <a href="https:www.facebook.com"><img src="Imagenes/icono1.png" class="img-responsive img-circle" alt="" width="50%"></a> 
                </div>
                
                <div class="col-md-2">
                <a href="https:www.twitter.com">    
            
                    <img src="Imagenes/icono2.png" class="img-responsive img-circle" alt="" width="50%"> </a>
                </div>
                
                <div class="col-md-2">
                <a href="https:www.instagram.com">   
                <img src="Imagenes/icono3.jpg" class="img-responsive img-circle" alt="" width="50%"></a>   
                </div>
                
                       <p class="text-right">Los Borbotones 2019©</p> 
             </div>
             </div>    
            </div>  
        </main>
        
        <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>




</html>