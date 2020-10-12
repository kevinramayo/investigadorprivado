<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos2">Detectives Privados Telefonicos</h1>
        <h2 class="titulos">Investigaciones Telefonicas, celulares</h2>
        <br>
        <br>
        <div class="row justify-content-sm-center">
        <div class="col-sm-12">
          <div class="car">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/celular.jpg" class="imginfe" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/celular2.jpg" class="imginfe" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/celular3.jpg" class="imginfe" alt="...">
            </div>
          </div>
        </div>
            <div class="card-body">
              <h2 class="card-title">Informacion sobre el servicio</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-sm-center">
      <div class="col-sm-5">
        <div class="card">
        <h3 class="card-header">Como se realiza el servicio</h3>
          <div class="card-body">
          <p>-Se necesitara una forma de poder contactar el dispositivo</p>
          <p class="pcol">-Nos tendra que proporcionar los datos necesario para proceder</p>
          <p>-Recavar informacion de todos los medios posibles</p>
          <p class="pcol">-Entre otras que se le informara personalmente</p>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
        <h3 class="card-header">Datos que se le entregaran</h3>
          <div class="card-body">
          <p>-Informacion sobre chat y apps</p>
          <p class="pcol">-Fotos, videos entre otros archivos multimedia</p>
          <p>-Historiales y datos removidos del dispositivo</p>
          <p class="pcol">-Informacion recopilada(InvestigadoresPrivadosMX no se responsabilisa de la info. encontrada)</p>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="row justify-content-sm-center">
    <div class="col-sm-3">
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Contratar Ahora!!!</h5>
      <a href="pagar.php" class="btn btn-warning">Contratar</a>
    </div>
  </div>
  </div>
  </div>
      
    <br>
    <br>
    <br>
    <div class="pie">
      <h6 class="pie">Web App from <i><a href='http://localhost/invprimon'
      target='_blank'>Web Development</a></i></h6>
      <h6 class="pie">Echo en mexico. CBTIS 253, Todos los derechos reservados ?-2020</h6>
      <h6 class="pie">Esta pagina puede ser reproducida con fines no lucrativos siempre y cuando no se mutile, se cite la fuente completa y su direccion electronica</h6>
    </div>
  </body>
</html>
_END;
?>