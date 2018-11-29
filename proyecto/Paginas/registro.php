<?php 
$datos = array();
$nombre = "";
$ap = "";
$am = "";
$edad = "";
$sexo = "";
$mail = "";
$usuario = "";
$contra = "";
$categoria = "";
if (isset($_POST["saveForm"])) {
  if (!empty($_POST["txtName"]) && !empty($_POST["txtAp"]) && !empty($_POST["txtAm"]) && !empty($_POST["txtEdad"]) && !empty($_POST["txtSexo"]) && !empty($_POST["txtMail"]) && !empty($_POST["txtUsuario"]) && !empty($_POST["txtContra"]) && !empty($_POST["txtCategoria"])) {
    $nom = htmlspecialchars($_POST["txtName"]);
    $ap = htmlspecialchars($_POST["txtAp"]);
    $am = htmlspecialchars($_POST["txtAm"]);
    $edad = htmlspecialchars($_POST["txtEdad"]);
    $sexo = htmlspecialchars($_POST["txtSexo"]);
    $mail = htmlspecialchars($_POST["txtMail"]);
    $usuario = htmlspecialchars($_POST["txtUsuario"]);
    $contra = htmlspecialchars($_POST["txtContra"]);
    $cat = htmlspecialchars($_POST["txtCategoria"]);

    $cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'http://localhost/pra/squash/servicioweb/servicioweb.php'));

    $datos = $cliente -> registrar($nom, $ap, $am, $edad, $sexo, $mail, $usuario, $contra, $cat);
    if ((int)$datos[0]["CLAVE"] != 0) {
      echo '<script language="javascript">alert("Datos registrados.")</script>';
    }else{
      echo '<script language="javascript">alert("Datos no registrados.")</script>';
    }

  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Squash Tolcayuca</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="estiloss.css" rel="stylesheet" type="text/css" />
<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1, height=device-height, user-scale=true/false">
<style>

.color{
        color: white;
  
    }
    h1{
        color: red;
    }
 table{

background-color: brown;
  }
  
    
</style>
</head>
<body>

<!-- header ends -->
        <!-- content begins -->
        <br>
        <br>

        	<form  name="registrar" method="POST">

  <tr><div>
    <label class="desc" id="title1" for="Field1">NOMBRE</label>
    <div>
      <input id="Field1" name="txtName" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu nombre...">
    </div>
</div>
  <div>
    <label class="desc" id="title1" for="Field1">APELLIDO PATERNO</label>
    <div>
      <input id="Field2" name="txtAp" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu apellido paterno...">
    </div>
  </div>
  <div>
    <label class="desc" id="title1" for="Field1">APELLIDO MATERNO</label>
    <div>
      <input id="Field2" name="txtAm" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu apellido materno...">
    </div>
  </div>

     <div>
    <label class="desc" id="title1" for="Field1">EDAD</label>
    <div>
      <input id="Field2" name="txtEdad" type="text" max="10" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu telefono...">
    </div>
  </div>

 <div>
    <label class="desc" id="title1" for="Field1">SEXO</label>
    <div>
      <input id="Field2" name="txtSexo" type="text" max="10" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu telefono...">
    </div>
  </div>

 <div>
    <label class="desc" id="title1" for="Field1">MAIL</label>
    <div>
      <input id="Field2" name="txtMail" type="text" max="10" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu telefono...">
    </div>
  </div>

 <div>
    <label class="desc" id="title1" for="Field1">USUARIO</label>
    <div>
      <input id="Field2" name="txtUsuario" type="text" max="10" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu telefono...">
    </div>
  </div>

  <div>
    <label class="desc" id="title1" for="Field1">CONTRASENA</label>
    <div>
      <input id="Field2" name="txtContra" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu correo...">
    </div>
  </div>

 <div>
    <label class="desc" id="title1" for="Field1">CATEGORIA</label>
    <div>
      <input id="Field2" name="txtCategoria" type="text" max="10" class="field text fn" value="" size="8" tabindex="1" placeholder="Escribe tu telefono...">
    </div>
  </div>


 <div >
    <div >
      <input id="saveForm" name="saveForm" type="submit" value="REGISTRAR" >
    </div>
  </div>

    </tr>
  </form>


              </body>
</html>
