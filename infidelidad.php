<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos2">Detectives Privados Conyugales</h1>
        <h2 class="titulos">Especializados en investigaciones sobre infidelidad</h2>
        <br>
        <br>
        <div class="row justify-content-sm-center">
        <div class="col-sm-12">
          <div class="car">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/infe.jpg" class="imginfe" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/infe2.jpg" class="imginfe" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/infe3.jpg" class="imginfe" alt="...">
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
          <p>-Con base a la informacion que usted nos proporcione podremos dar un seguimientos del individuo para recolectar informacion</p>
          <p class="pcol">-Usted puede decidir que tipo de informcion se filtrara para conseguirle la que mas se ajuste a sus necesidades</p>
          <p>-se hara un seguimiento exhaustivo para la obtencion detallada de cada dato requerido</p>
          <p class="pcol">-Entre otras que se le informara personalmente</p>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
        <h3 class="card-header">Datos que se le entregaran</h3>
          <div class="card-body">
          <p>-Informacion relacionada con el individuo unicamente para su adquisicion personal</p>
          <p class="pcol">-Fuentes de la optencion de la informacion</p>
          <p>-Historial relacionada a los sospechosos relacionados al individuo</p>
          <p class="pcol">-cualquier otra informacion relacionada al individuo que usted nos pueda pedir (InvestigadoresPrivadosMX no se responsabilisa de la info. encontrada)</p>
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