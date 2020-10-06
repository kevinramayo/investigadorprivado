<?php
    require_once 'header.php';
   
echo <<<_END
	<script>
		function checkUser(user){
			if (user.value == ''){
				$('#used').html('&nbsp;')
				return
			}
			$.post ( 'checkuser.php', { user: user.value },
		    	function(data) {
		  			$('#used').html(data)
				}
	    	)
		}
	</script>
_END;

    $error = $user = $pass = "";
    if (isset($_SESSION['user']))  destroySession();

    if (isset($_POST['user'])) {
       $user = sanitizeString($_POST['user']);
       $pass = sanitizeString($_POST['pass']);

       if ($user == "" || $pass == "")
	  		$error = 'No se llenaron todos los espacios<br><br>';
       else {
			$result = queryMysql("SELECT * FROM members WHERE user='$user'");
	
			if ($result->num_rows)
	  			 $error = 'El Nombre de usuario ya existe<br><br>';
			else {
	  			queryMysql("INSERT INTO members VALUES('$user', '$pass')");
	  			die('<h4>Cuenta creada</h4>Porfavor Inicia secion.</div></body></html>');
			}
      	}
    }

echo <<<_END
	<form method='post' action='signup.php'>$error
	<div>
	    <label></label>
	    Porfavor llena los espacios para registrarte
	</div>
	<div id="registro" class="registrar">
	<br>
	  <label>Nombre de Usuario:</label><br>
	  <input class="llenado" type='text' maxlength='16' name='user' value='$user'
		onBlur='checkUser(this)'>
		<br>
	   <label>Contraseña:</label><br>
	   <input class="llenado" type='password' maxlength='16' name='pass' value='$pass'>
	</div>
	<br>
	<div>
	   <label></label>
	   <input class="btn btn-success" type='submit' value='Registrarse'>
	   <a class="btn btn-warning" href='invitado.php#1'>No deseo registrarme</a>
	</div>
	<br>
   </div>
  </body>
</html>
_END;
?>