

<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Squash Tolcayuca</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../styles.css" rel="stylesheet" type="text/css" />
<link href="../resto.css" rel="stylesheet" type="text/css" />
<link href="../estiloss.css" rel="stylesheet" type="text/css" />
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
</style>
</head>
<body>
  <header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>Squash Tolcayuca</h1>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open">
                <nav>
                    
                    <a href="inicio_sesion.php">Inicio</a>
                    <a href="cancha.php">Cancha</a>
                    <a href="convoctoria_ext.php">Torneo</a>
                    <a href="perfil.php">Perfil</a>
                    <a href="sesion.php">Cerrar Sesión</a>
                </nav>
            </div>
        </div>
    </header>


<!-- header ends -->
        <!-- content begins -->
        <br>
        <br>

        	<form  name="registrar" method="POST">
             <table  align="center" class="tabla" width="50%" >
            <br>
             <tr align="center">
    <td class="color" > NOMBRE: </td>
       <td align="left"><input id="nombre" name="txtName" type="text" value=""  style="width:200px;height:20px"></td></tr>
       
       <tr align="center">
    <td class="color" > ID: </td>
       <td align="left"><input id="nombre" name="txtid" type="text" value=""  style="width:200px;height:20px"></td></tr>
       
       
        <tr align="center">
           <td class="color" > APELLIDO PATERNO: </td>
       <td align="left"><input id="ap" name="txtAp" type="text" value=""  style="width:200px;height:20px" ></td></tr>
      <tr align="center">
           <td class="color" > APELLIDO MATERNO: </td>
       <td align="left"><input id="am" name="txtAm" type="text" value=""  style="width:200px;height:20px" ></td></tr>
        <tr align="center">
           <td class="color" > EDAD: </td>
       <td align="left"><input id="edad" name="txtEdad" type="number" value=""  style="width:200px;height:20px" ></td></tr>
       
       
       
        <tr align="center">
          <td class="color" class="t"> SEXO: </td>
              <td align="left"> <select id="txtSexo" name="txtSexo"  style="width:200px;height:20px">
</td>

</select>
</tr>
       <tr align="center">
           <td class="color" > MAIL: </td>
       <td align="left"><input id="mail" name="txtMail" type="text" value=""  style="width:200px;height:20px" ></td></tr>
       
   <tr align="center">
           <td class="color" > USUARIO: </td>
       <td align="left"><input id="usuario" name="txtUsuario" type="text" value=""  style="width:200px;height:20px" ></td></tr>
        <tr align="center">
           <td class="color" > CONTRASEÑA: </td>
       <td align="left"><input id="contra" name="txtContra" type="password" value=""  style="width:200px;height:20px" ></td></tr>
       <tr align="center">
   
              <td class="color" class="t"> CATEGORIA: </td>
              <td align="left"> <select name="txtCategoria"  style="width:200px;height:20px">
</td>

</select>
</tr>
         <tr align="center">
         <td> </td>
         <td align="left"> <input type="submit" name="actualizar" value="ACTUALIZAR DATOS"  style="width:150px;height:30px"></td>

       </tr>
   
</table>
   </form>


              </body>
</html>
