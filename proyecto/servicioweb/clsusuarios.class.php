<?php
    class clsusuarios{

        public function acceso($usuario, $contra){
            $datos=array();
            if($conn = mysqli_connect("localhost", "baseDeDatosSquash", " ")){

                $renglon = mysqli_query($conn, "CALL spValidarAcceso('$usuario', '$contra')");
                while ($resultado = mysqli_fetch_assoc($renglon)) {
                    $datos[0]["CLAVE"] = $resultado[0]["CLAVE"];
                    if ((int)$datos[0] !=0) {
                        
                        $datos[1]["NOMBRE"] = $resultado[1]["NOMBRE"];
                        $datos[2]["ROL"] = $resultado[2]["ROL"];
                    }
                }
                mysqli_close($conn);
            }
            return $datos;
        }

        

        public function registrar($nom, $ap, $am, $edad, $sexo, $mail, $usuario, $contra, $cat){
            $datos = array();
            if($conn = mysqli_connect("localhost", "baseDeDatosSquash", " ")){
                $consulta = mysqli_query($conn, "CALL spRegistrarUsuario('$nom', '$ap', '$am', '$edad', '$sexo', '$mail', '$usuario', '$contra', '$cat')");
                while($resultado = mysqli_fetch_assoc($consulta)){
                    $datos[0]["CLAVE"] = $resultado["CLAVE"];
                }
            }
            mysqli_close($conn);
            return $datos;
        }



        public function registrarCancha($usu,$numeroj,$fecha,$inicio,$final,$telfono,$cancha,$estatus){

            $datos = array();
            if($conn = mysqli_connect("localhost", "baseDeDatosSquash", " ")){
                $consulta = mysqli_query($conn, "CALL spRegistrarUsuario('$usu','$numeroj','$fecha,$inicio','$final','$telfono','$cancha','$estatus')");
                while($resultado = mysqli_fetch_assoc($consulta)){
                    $datos[0]["CLAVE"] = $resultado["CLAVE"];
                }
            }
            mysqli_close($conn);
            return $datos;
        }





    }
?>