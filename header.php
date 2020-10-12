<?php
   session_start();
echo <<<_INIT
   <!DOCTYPE html> 
   <html>
     <head>
       <meta charset='utf-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1'>                 
       <script src='node_modules/jquery/dist/jquery.min.js'></script>
       <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
       <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
       <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
       <link rel='stylesheet' href='styles.css' type='text/css'>    
       <script src='javascript.js'></script>
_INIT;
   
   require_once 'functions.php';
   $userstr = 'Bienvenido Usuario';
   if (isset($_SESSION['user'])) {
      $user     = $_SESSION['user'];
      $loggedin =  TRUE;
      $userstr  = "Secion de: $user";
   }
   else $loggedin = FALSE;

echo <<<_MAIN
      <title>Investigador Privado</title>
   </head>
   <body>
      <div>
         <div>
            <div id= 'logo' class='center'>Investigador Privado
            <img src="img/lupa.png" class="imglogo"></div>

            <div class="row justify-content-sm-center">
            <div class="col-sm-3">
              <div class="cards">
              <img src="img/feis.png" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">Investigadores Privados MX</h6>
                  <p class="titulos">Pagina de Facebook</p>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="cards">
              <img src="img/insta.png" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">InvestigadoresMXK</h6>
                  <p class="titulos">Siguenos en instagram</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="cards">
              <img src="img/twiter.jpg" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">InvestigadoresMXOficial</h6>
                  <p class="titulos">Siguenos en Twitter</p>
                </div>
              </div>
            </div>
          </div>
          <div class='username'>$userstr</div> 
         </div>
      <div>
_MAIN;
   if ($loggedin){
echo <<<_LOGGEDIN
         <div class='center'>
         <nav class="navbar navbar-light bg-light">
         <a class="navbar-brand" href="home.php">
         InvestigadoresPrivadosMX
           <img src="img/lupa.png" width="30" height="30" class="d-inline-block align-top" alt="">
         </a>
         <ul class="nav justify-content-end">
         <li class="nav-item">
           <a class="btn btn-outline-primary" href="home.php">Home</a>
         </li>
         <li class="nav-item dropdown">
         <a class="btn btn-outline-primary" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="infidelidad.php">Infidelidades</a>
           <a class="dropdown-item" href="empresa.php">Empresariales</a>
           <a class="dropdown-item" href="localizaciones.php">Localizaciones</a>
           <a class="dropdown-item" href="tel.php">Inv. Telefonicas</a>
         </div>
         <li class="nav-item">
           <a class="btn btn-outline-primary" href="direccion.php">Actualizar Direccion</a>
         </li>
       </li>
         <li class="nav-item">
           <a class="btn btn-outline-primary" href="logout.php">Log Out</a>
         </li>
       </ul>
         </div> 
         </nav>
_LOGGEDIN;
   }
      else {
echo <<<_GUEST
         <div class='center'>
            <a class="btn btn-outline-primary" href='/invprimon'>Regresar al CV</a>
            <a class="btn btn-outline-primary" href='index.php'>Home</a>
            <a class="btn btn-outline-primary" href='signup.php#registro'>Registrarse</a>
            <a class="btn btn-outline-primary" href='login.php#ini'>Iniciar seción</a>     
         </div>
         <br>

         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div id= "centro" class="carousel-item active">
             <img src="img/invepng.png" class="tamaño" alt="...">
           </div>
           <div id= "centro" class="carousel-item">
             <img src="img/carrusel-2.png" class="tamaño" alt="...">
           </div>
           <div id= "centro" class="carousel-item">
             <img src="img/carrusel-3.png" class="tamaño" alt="...">
           </div>
           <div id= "centro" class="carousel-item">
             <a href='signup.php'><img src="img/carrusel-4.png" class="tamaño" alt="..."></a>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>

         <strong><p class='info'>(Registrese con sus datos o puede registrarse como "Invitado")</p></strong>
_GUEST;
}
?>