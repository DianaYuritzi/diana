<?php 
$datos = array();
$dt = array();
$nombre = "";
$ap = "";
$am = "";
$edad = "";
$sexo = "";
$mail = "";
$usuario = "";
$contra = "";
$categoria = "";


$cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'https://squashtolcayuca.000webhostapp.com/finalsquash/servicioweb/servicioweb.php'));
 $dt = $cliente -> categorias();

if (isset($_POST["registrar"])) {
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
<link href="paginas/styles.css" rel="stylesheet" type="text/css" />
<link href="paginas/estiloss.css" rel="stylesheet" type="text/css" />
<link href="paginas/resto.css" rel="stylesheet" type="text/css" />
<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1, height=device-height, user-scale=true/false">
<style>

.color{
        color: white;
  
    }
    h1{
        color: #2E86C1;
    }
  table{

background-color: #2E86C1; opacity: 0.9;
margin-left: 25%;

  }
    
</style>
</head>
<body>

<!-- header ends -->
        <!-- content begins -->
        <br>
        <br>

        		 <form  name="registrar" method="POST">
             <table  align="center" class="tabla" width="50%" >
            <br>
             <tr align="center">
    <td class="color" > NOMBRE: </td>
       <td align="left"><input id="txtName" name="txtName" type="text" value=""  style="width:200px;height:20px"></td></tr>
        <tr align="center">
           <td class="color" > APELLIDO PATERNO: </td>
       <td align="left"><input id="txtAp" name="txtAp" type="text" value=""  style="width:200px;height:20px" ></td></tr>
      <tr align="center">
           <td class="color" > APELLIDO MATERNO: </td>
       <td align="left"><input id="txtAm" name="txtAm" type="text" value=""  style="width:200px;height:20px" ></td></tr>
        <tr align="center">
           <td class="color" > EDAD: </td>
       <td align="left"><input id="txtEdad" name="txtEdad" type="number" value=""  style="width:200px;height:20px" ></td></tr>
        <tr align="center">
         <td class="color" class="t"> SEXO: </td>
              <td align="left"> <select id="txtSexo" name="txtSexo"  style="width:200px;height:20px">
<option value="Masculino"> Masculino </option> 
<option value="Femenino"> Femenino </option> 

</td>

</select>
</tr>
       <tr align="center">
           <td class="color" > MAIL: </td>
       <td align="left"><input id="txtMail" name="txtMail" type="text" value=""  style="width:200px;height:20px" ></td></tr>
       
   <tr align="center">
           <td class="color" > USUARIO: </td>
       <td align="left"><input id="txtUsuario" name="txtUsuario" type="text" value=""  style="width:200px;height:20px" ></td></tr>
        <tr align="center">
           <td class="color" > CONTRASEÃ‘A: </td>
       <td align="left"><input id="txtContra" name="txtContra" type="password" value=""  style="width:200px;height:20px" ></td></tr>
       <tr align="center">
   
              <td class="color" class="t"> CATEGORIA: </td>
              <td align="left"> <select id="txtCategoria" name="txtCategoria"  style="width:200px;height:20px">
<option value=1> Infantil </option> 
<option value=2> Primera fuerza </option> 
<option value=3> Segunda fuerza </option> 
<option value=4> Tercera fuerza </option> 
<option value=5> Cuarta fuerza </option> 
<option value=6> Quinta fuerza </option> 
<option value=7> Master A </option> 
<option value=8> Master B </option> 
<option value=9> Master C </option> 
<option value=10> Master D </option> 
</td>
</select>
</tr>




         <tr align="center">
         <td> </td>
         <td align="left"> <input type="submit" name="registrar" value="REGISTRAR"  style="width:150px;height:30px"></td>

       </tr>
   
</table>
   </form>


              </body>
</html>
