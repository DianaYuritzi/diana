<?php

  $usuario = "";
  $contra = "";
  $datos = array();
  if(!empty($_POST["txtUsu"]) && !empty ($_POST["txtContra"])){
    $usuario = "josefv";
    $contra = "josefv";

  $cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'http://localhost/pra/squash/servicioweb/servicioweb.php'));
  $datos = $cliente -> acceso($usuario, $contra);
    if($datos[0]["CLAVE"] != 0){
      echo '<script language="javascript">alert("Bienvenido al sistema '.$datos[1]["USUARIO"].', estas accediendo como '.$datos[2]["ROL"].'.")</script>';
    } else {
      $datos[0] = 0;
      echo '<script language="javascript">alert("Acceso denegado, no es digno.")</script>';
    }
  }
?>
<html>
    <head>
    </head>
    <body>
        <form name="acceso" method="POST">
            <table border>
                <tr>
                    <th colspan="2">Inicio de sesion</th>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="txtUsu"></td>
                </tr>
                <tr>
                    <td>Contrasena:</td>
                    <td><input type="password" name="txtContra"></td>
                </tr>
                <tr>
                    <td><input type="reset" name="btnCan" value="Cancelar"></td>
                    <td><input type="submit" name="btnIng" value="Ingresar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>