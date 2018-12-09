<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Squash Tolcayuca</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../styles.css" rel="stylesheet" type="text/css" />
<link href="../styless.css" rel="stylesheet" type="text/css" />
<link href="../resto.css" rel="stylesheet" type="text/css" />

<meta name="viwport" content="width=device-width, initial-scal=1,maximum-scale=1, height=device-height, user-scale=true/false">
<style >
.color{
    color:white;
}
  h1{
     color: #2E86C1;
  }
  h2{
     color: black;
  }
  table{

background-color:  #2E86C1; opacity: 0.9;

  }
  .texto{
   
  font-size: 2.0em;

float: right;
   
  }
</style>

</head>
<body class="color">
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

<div class="wrapper">
  <input checked type=radio name="slider" id="slide1" />
  <input type=radio name="slider" id="slide2" />
  <input type=radio name="slider" id="slide3" />
  <input type=radio name="slider" id="slide4" />
  <input type=radio name="slider" id="slide5" />

  <div class="slider-wrapper">
    <div class=inner>
      <article>
        <div class="info top-left">
          <h3>JUEGA CON AMIGOS</h3>
        </div>
       <img src="../images/header2.jpg" />
      </article>

      <article>
        <div class="info bottom-right">
          <h3>HAZ EJERCICIO</h3>
        </div>
        <img  src="../images/header4.jpg"/>
      </article>

      <article>
        <div class="info bottom-left">
          <h3>DIVIERTETE</h3>
        </div>
        <img src="../images/header3.jpg" />
      </article>

      <article>
        <div class="info top-right">
          <h3>ENTRENA</h3>
        </div>
        <img src="../images/header5.jpg" />
      </article>

      <article>
        <div class="info bottom-left">
          <h3>ESFUERZATE</h3>
        </div>
        <img src="../images/header6.jpg" />
      </article>
    </div>
    <!-- .inner -->
  </div>
  <!-- .slider-wrapper -->

  <div class="slider-prev-next-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-prev-next-control -->

  <div class="slider-dot-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-dot-control -->
</div>

        <!-- content begins -->
        <center><table class="tabla" width="70%">
    <tr>
      <td align="left"> <img src="../images/img8.jpg" width="100%"></td>
      <td class="texto"> <h2> <center> <b>Bienvenido</b> </center></h2><br>
       <center><h2><?php if(isset($_SESSION['NOMBRE'])) {echo $_SESSION['NOMBRE'];}?> Club Squash Tolcayuca</h2><br> </center>
      <p>El squash es un deporte de raqueta que se practica en interiores con dos jugadores y una pelota de goma que puede tener distintos grados de velocidad o rebote. El grado de velocidad y/o rebote se identifica en el color de la pelota.</p>
          
    </td>
    </tr>
  </table>
  </center>	
 
            
  </body>
            </body>
</html>
