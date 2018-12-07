<?php
$datos = array();
$usuario = "";
$numeroj = "";
$fecha = "";
$inicio = "";
$fin = "";
$telefono = "";
$cancha = "";
$estatus = "";

if (isset($_POST["registrar"])) {

  if (!empty($_POST["txtName"]) && !empty($_POST["txtName"]) && !empty($_POST["txtName"]) && !empty($_POST["txtName"]) && !empty($_POST["txtName"])) {
    $usuario = 1;
    $numeroj = htmlspecialchars($_POST["play"]);;
    $fecha = htmlspecialchars($_POST["fechacita"]);;
    $inicio = htmlspecialchars($_POST["hi"]);;
    $fin = htmlspecialchars($_POST["hf"]);;
    $telefono = htmlspecialchars($_POST["tel"]);;
    $cancha = htmlspecialchars($_POST["cancha"]);;
    $estatus = 0;

    $cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'http://localhost/pra/squash/servicioweb/servicioweb.php'));
    $datos = $cliente -> registrarCancha($usuario,$numeroj,$fecha,$inicio,$final,$telefono,$cancha,$estatus);

    if ((int)$datos[0]["CLAVE"] != 0) {

      echo '<script language="javascript">alert("Cancha registrada.")</script>';

    }else{

      echo '<script language="javascript">alert("Datos no registrados.")</script>';
    }
  }
} 
?>
<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Squash Tolcayuca</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="paginas/styles.css" rel="stylesheet" type="text/css" />
<link href="paginas/resto.css" rel="stylesheet" type="text/css" />
<link href="paginas/estiloss.css" rel="stylesheet" type="text/css" />
<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1, height=device-height, user-scale=true/false">
<style >
.color{
        color: white;
  
    }
  h1{
     color: BLUE;
  }
  h2{
     color: white;
  }
  table{

background-color: grey; opacity: 0.9;
margin-left: 25%;

  }
  .texto{
   
  font-size: 1.5em;

float: right;
   
  }
</style>

</head>
<body>
  <header class="clearfix">
    </header>


    <form name="registrarCancha" method="POST">
    <table  align="center" class="tabla" width="50%" >
            <br>
   <tr align="center">
   
              <td class="color" class="t"> CANCHA: </td>
              <td align="left"> <select name="cancha"  style="width:200px;height:20px">
<option value="1"> Cancha 1 </option>
<!--ACTIVAR SI ESTAN DISPONIBLES-->
<!--<option value="2"> Cancha 2 </option> 
<option value="3"> Ambas </option>-->
</td>

</select>
</tr>
       <tr align="center">
    <td class="color" > NOÂ° JUGADORES: </td>
       <td align="left"><input id="play" name="play" type="number" value=""  style="width:200px;height:20px" min="1" max="4"></td></tr>
        <tr align="center">
           <td class="color" > TELEFONO: </td>
       <td align="left"><input id="tel" name="tel" type="text" value=""  style="width:200px;height:20px" ></td></tr>
       <tr align="center">
    <td class="color" > FECHA A USARSE: </td>
       <td align="left"><input type="date" name="fechacita" min="2018-11-01" max="2020-12-31" step="7" style="width:200px;height:20px"></td></tr>
        <tr align="center">
   
              <td class="color" class="t"> HORA DE INICIO: </td>
              <td align="left"> <select name="hi"  style="width:200px;height:20px">
<option value="c1"> 09:00 </option> 
<option value="c2"> 10:00 </option> 
<option value="c3"> 11:00 </option> 
<option value="c4"> 12:00 </option> 
<option value="c5"> 13:00 </option> 
<option value="c6"> 14:00 </option> 
<option value="c7"> 15:00 </option> 
<option value="c8"> 16:00 </option> 
<option value="c9"> 17:00 </option> 
<option value="c10"> 18:00 </option> 
<option value="c11"> 19:00 </option> 
<option value="c12"> 20:00 </option> 
<option value="c13"> 21:00 </option> 
<option value="c14"> 22:00 </option> 
</td>

</select>
</tr>

        <tr align="center">
   
              <td class="color" class="t"> HORA FIN: </td>
              <td align="left"> <select name="hf"  style="width:200px;height:20px">
<option value="f1"> 10:00 </option> 
<option value="f2"> 11:00 </option> 
<option value="f3"> 12:00 </option> 
<option value="f4"> 13:00 </option> 
<option value="f5"> 14:00 </option> 
<option value="f6"> 15:00 </option> 
<option value="f7"> 16:00 </option> 
<option value="f8"> 17:00 </option> 
<option value="f9"> 18:00 </option> 
<option value="f10"> 19:00 </option> 
<option value="f11"> 20:00 </option> 
<option value="f12"> 21:00 </option> 
<option value="f13"> 22:00 </option> 
<option value="f14"> 23:00 </option> 
</td>

</select>
</tr>
       <tr align="center">
         <td> </td>
         <td align="left"> 
          <input type="submit" id="registrar" name="registrar" value="REGISTRAR"  style="width:150px;height:30px"></td>

       </tr>
       
   </table>

   </form>
   
      <div id="footer">
         
                <a href="#">Squash Tolcayuca, Hidalgo C.P. 43860 </a>
              </div>


              </body>
</html>

