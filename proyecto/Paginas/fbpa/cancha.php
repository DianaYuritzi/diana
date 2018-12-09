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
<style >
.color{
        color: white;
  s
    }
  h1{
     color: BLUE;
  }
  h2{
     color: white;
  }
  table{

background-color:  #2E86C1; opacity: 0.9;
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


    <form name="registrarCancha" method="POST">
    <table  align="center" class="tabla" width="50%" >
            <br>
            
            <tr align="center" style="visibility:hidden">
           <td class="color" > CLAVE USUARIO: </td>
       <td align="left"><input  name="txtusu" type="text" value="<?php echo $_SESSION['ID'] ;?>"  style="width:200px;height:20px"  ></td></tr>
       
       
   <tr align="center">
   
              <td class="color" class="t"> CANCHA: </td>
              <td align="left"> <select name="txtcancha"  style="width:200px;height:20px">
<option value=1> Cancha 1 </option>
<!--ACTIVAR SI ESTAN DISPONIBLES-->
<!--<option value="2"> Cancha 2 </option> 
<option value="3"> Ambas </option>-->
</td>

</select>
</tr>
       <tr align="center">
    <td class="color" > NO° JUGADORES: </td>
       <td align="left"><input id="play" name="txtplay" type="number" value=""  style="width:200px;height:20px" min="1" max="4"></td></tr>
        <tr align="center">
           <td class="color" > TELEFONO: </td>
       <td align="left"><input id="tel" name="txttel" type="text" value=""  style="width:200px;height:20px" ></td></tr>
       <tr align="center">
    <td class="color" > FECHA A USARSE: </td>
       <td align="left"><input type="date" name="txtfechacita" min="2018-11-01" max="2020-12-31" step="7" style="width:200px;height:20px"></td></tr>
        <tr align="center">
   
              <td class="color" class="t"> HORA DE INICIO: </td>
              <td align="left"> <select name="txthi"  style="width:200px;height:20px">
<option value="09:00"> 09:00 </option> 
<option value="10:00"> 10:00 </option> 
<option value="11:00"> 11:00 </option> 
<option value="12:00"> 12:00 </option> 
<option value="13:00"> 13:00 </option> 
<option value="14:00"> 14:00 </option> 
<option value="15:00"> 15:00 </option> 
<option value="16:00"> 16:00 </option> 
<option value="17:00"> 17:00 </option> 
<option value="18:00"> 18:00 </option> 
<option value="19:00"> 19:00 </option> 
<option value="20:00"> 20:00 </option> 
<option value="21:00"> 21:00 </option> 
<option value="22:00"> 22:00 </option> 
</td>

</select>
</tr>

        <tr align="center">
   
              <td class="color" class="t"> HORA FIN: </td>
              <td align="left"> <select name="txthf"  style="width:200px;height:20px">
<option value="10:00"> 10:00 </option> 
<option value="11:00"> 11:00 </option> 
<option value="12:00"> 12:00 </option> 
<option value="13:00"> 13:00 </option> 
<option value="14:00"> 14:00 </option> 
<option value="15:00"> 15:00 </option> 
<option value="16:00"> 16:00 </option> 
<option value="17:00"> 17:00 </option> 
<option value="18:00"> 18:00 </option> 
<option value="19:00"> 19:00 </option> 
<option value="20:00"> 20:00 </option> 
<option value="21:00"> 21:00 </option> 
<option value="22:00"> 22:00 </option> 
<option value="23:00"> 23:00 </option> 
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
              </body>
</html>