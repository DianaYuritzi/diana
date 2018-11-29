<?php
  $usuario = "";
  $contra = "";
  $datos = array();
  if(!empty($_POST["txtUsu"]) && !empty ($_POST["txtContra"])){
    $usuario = htmlspecialchars($_POST["txtUsu"]);
    $contra = htmlspecialchars($_POST["txtContra"]);

  $cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'http://localhost/pra/squash/servicioweb/servicioweb.php'));
  $datos = $cliente -> acceso($usuario, $contra);
    if((int)$datos[0]["CLAVE"] != 0){
      echo '<script language="javascript">alert("Bienvenido al sistema '.$datos[1]["USUARIO"].', estas accediendo como '.$datos[2]["ROL"].'.")</script>';
    } else {
      $datos[0] = 0;
      echo '<script language="javascript">alert("Acceso denegado, no es digno.")</script>';
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
<link href="login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1, height=device-height, user-scale=true/false">
<style >
  h1{
     color: blue;
  }
</style>

</head>
<body>

<br>
<br>
<br>
<br>
<div id="wrapper">

<div class="form_div">
<p class="form_label">INICIAR SESION</p>


<form method="POST" action="">
<p class="form_label1">USUARIO</p>


<input type="text" placeholder="Enter Email" name="txtUsu"><br>
<br>
<p class="form_label1">CONTRASEÑA</p>
<input type="password" placeholder="**********"  name="txtContra">
<br><br>
<p><input type="submit" value="INGRESAR"></p>
<p><a href="registro.html"><input type="button" value="REGISTRAR"></a></p>


</form>
</div>
<br>
<br>

    
              <script>
$(function() {
  menu = $('nav ul');

  $('#openup').on('click', function(e) {
    e.preventDefault(); menu.slideToggle();
  });
  
  $(window).resize(function(){
    var w = $(this).width(); if(w > 480 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });
  
  $('nav li').on('click', function(e) {                
    var w = $(window).width(); if(w < 480 ) {
      menu.slideToggle(); 
    }
  });
  $(.'open-menu').height($(window).height());
});
</script>

            </body>
</html>
