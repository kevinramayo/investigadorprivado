<?php
  require_once 'header.php';
  $error = $estado = $ciudad = $colonia = $calle = $postal = $exterior = "";

  if (isset($_POST['estado']))
  {
    $estado = sanitizeString($_POST['estado']);
    $user = sanitizeString($_POST['user']);
    $ciudad = sanitizeString($_POST['ciudad']);
    $colonia = sanitizeString($_POST['colonia']);
    $calle = sanitizeString($_POST['calle']);
    $postal = sanitizeString($_POST['postal']);
    $exterior = sanitizeString($_POST['exterior']);

    if ($estado == "" || $ciudad == "" || $colonia == "" || $calle == "" || $postal == "" || $exterior == "")
      $error = '<br>El registro de su direccion no es obligatorio pero debe llenar todos los campos si desea actualizarla';
    else
      {
        queryMysql("INSERT INTO direccion (user,estado,ciudad,colonia,calle,postal,exterior) VALUES('$user','$estado', '$ciudad', '$colonia', '$calle', '$postal', '$exterior')");
          die('<strong><h4>Direccion actualizada</h4></strong><p>Le enviaremos el tiempo que nos tomara contactarlo.</p><h6>-DetectivesPrivadosMX Tiene sumo cuidado con los datos personales de sus clientes-</h6>
          </div></body></html>');
      }
    } 

echo <<<_END
      <form method='post' action='direccion.php'>
      <br>
      <h5 class="aviso">La direccion no es obligatoria pero nos facilitara el poder brindarle informacion importante la disponibilidad del servicio</h5>
        <div>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <br>
        <div class="direccion">
        <div class="row justify-content-sm-center">
          <div class="col-sm-3">
            <br>
            <label>Nombre de Usuario</label>
            <input type="text" class="form-control" name='user' value="$user" readonly="readonly">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-6">
            <label>Estado</label>
            <input type="text" class="form-control" placeholder="Estado/Provincia" maxlength='30' name='estado' value="$estado">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-6">
            <label>Ciudad</label>
            <input type="text" class="form-control" placeholder="Ciudad" maxlength='30' name='ciudad' value="$ciudad">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-6">
            <label>Colonia/Barrio</label>
            <input type="text" class="form-control" placeholder="Colonia" maxlength='30' name='colonia' value="$colonia">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-6">
            <label>Calle</label>
            <input type="text" class="form-control" placeholder="Calle" maxlength='40' name='calle' value="$calle">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-3">
            <label>Codigo postal</label>
            <input type="text" class="form-control" placeholder="Codigo Postal" maxlength='10' name='postal' value="$postal">
          </div>
          <div class="col-sm-3">
            <label>Numero Exterior</label>
            <input type="text" class="form-control" placeholder="Numero exterior" maxlength='16' name='exterior' value="$exterior">
          </div>
        </div>
        <br>
        <label></label>
        <input class="btn btn-success" type='submit' value='Actualizar Direccion'>
      </div>
      </form>
        <br>
  </body>
</html>
_END;
?>