<?php
  
  require_once 'header.php';

  echo "<div class='center'>Bienvenido,";

  if ($loggedin) echo " $user, Vuelva a presionar HOME para ir al inicio";
  else           echo ' porfavor inicia secion o registrate para continuar';

  echo <<<_END
      </div><br>
    </div>
    <br>
    <br>
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