<?php
  $usuario = "";
  $contra = "";
  $datos = array();
  if(!empty($_POST["txtusu"]) && !empty ($_POST["txtcontra"])){
      
      
    $usuario=htmlspecialchars($_POST['txtusu']);
    $contra=htmlspecialchars($_POST['txtcontra']);

  $cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'https://squashtolcayuca.000webhostapp.com/finalsquash/servicioweb/servicioweb.php'));
  
  
  $datos = $cliente -> acceso($usuario, $contra);
  
 
    if((int)$datos[0]['CLAVE'] != 0){
        
        if(!isset($_SESSION['NOMBRE'])){
            $_SESSION['NOMBRE']=$datos[1]["NOMBRE"];
            
        }
        if(!isset($_SESSION['ID'])){
            $_SESSION['ID']=$datos[2]["ID"];
        }
        
        if(!isset($_SESSION['NOM'])){
            $_SESSION['NOM']=$datos[3]["NOM"];
            
        }
         if(!isset($_SESSION['AP'])){
            $_SESSION['AP']=$datos[4]["AP"];
            
        }
         if(!isset($_SESSION['AM'])){
            $_SESSION['AM']=$datos[5]["AM"];
            
        }
         if(!isset($_SESSION['EDAD'])){
            $_SESSION['EDAD']=$datos[6]["EDAD"];
            
        }
         if(!isset($_SESSION['SEXO'])){
            $_SESSION['SEXO']=$datos[7]["SEXO"];
            
        }
         if(!isset($_SESSION['MAIL'])){
            $_SESSION['MAIL']=$datos[8]["MAIL"];
            
        }
         if(!isset($_SESSION['USU'])){
            $_SESSION['USU']=$datos[9]["USU"];
            
        }
         if(!isset($_SESSION['CONTRA'])){
            $_SESSION['CONTRA']=$datos[10]["CONTRA"];
            
        }
         if(!isset($_SESSION['ADMIN'])){
            $_SESSION['ADMIN']=$datos[11]["ADMIN"];
            
        }
        if(!isset($_SESSION['CATEGORIA'])){
            $_SESSION['CATEGORIA']=$datos[12]["CATEGORIA"];
            
        }

        
        

      if((int)$datos[11]['ADMIN'] == 1){
          echo '<script language="javascript">alert("Bienvenido al sistema '.$datos[1]['NOMBRE'].', estas accediendo como Administrador.");document.location.href="?op=inicio_sesion";</script>';
      }else{
          echo '<script language="javascript">alert("Bienvenido al sistema '.$datos[1]['NOMBRE'].', estas accediendo como Jugador.");document.location.href="?op=inicio_sesion";</script>';
      }
      
      
    } else {
      $datos[0] = 0;
      echo '<script language="javascript">alert("Acceso denegado.")</script>';
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
<link href="paginas/styles.css" rel="stylesheet" type="text/css" />
<link href="paginas/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1,height=device-height, user-scale=true/false">
<style >
  h1{
     color: #2E86C1;
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


<input type="text" placeholder="Enter Email" name="txtusu"><br>
<br>
<p class="form_label1">CONTRASEÃ‘A</p>
<input type="password" placeholder="**********"  name="txtcontra">
<br><br>
<p><input type="submit" value="INGRESAR"></p>
<p><input type="button" value="REGISTRAR"></p>


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
