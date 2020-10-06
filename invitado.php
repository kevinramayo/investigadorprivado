<?php
  require_once 'header.php';
  $error= "";
  $user = "Invitado"; 
  $pass = "Invitado";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'No se llenaron todos los campos';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members 
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error= "Intento de Ingreso Invalido";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class= 'center'>Ya has iniciado. Dirijase a Home
              <a data-transition='slide' href='members.php?view=$
              Para Continar.</div></div><br><br></body></html>");
      }
    }    
  }

echo <<<_END
      <form method='post' action='invitado.php'>
        <div>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div id="1">
            <label></label>
            Esta a punto de Iniciar como "Invitado"
        </div>
        <br>
        <div class="registrar" id="ini">
        <br>
            <label>Nombre de Usuario:</label><br>
            <input class="llenado" type='password' maxlength='16' name='user' value='$user' readonly="readonly">
            <br>
            <label>Contraseña:</label><br>
            <input class="llenado" type='password' maxlength='16' name='pass' value='$pass' readonly="readonly">
        </div>
        <br>
        <div>
            <label></label>
            <input class="btn btn-success" type='submit' value='Registrarse como invitado'>
        </div>
      </form>
      <br>
  </body>
</html>
_END;
?>