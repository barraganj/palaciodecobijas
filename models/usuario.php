<?php  
include("conexion.php");
 
class usuario{
    function usuario(){}
        function selcon($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $conBD->ejecon($sql,2);
            // $conBD->desconectarBD();
        }
        function selcot($sql){
            $conBD = new conexion();
            $esa = $conBD->conectarBD();

            $data = $conBD->ejecon($sql);
            // $conBD->desconectarBD();
            return $data;
        }
        function insusu($nombre,$correo,$clave){
            
            $sql = "INSERT INTO `usuario` (`nombre`,`correoUsuario`, `claveUsuario`, `rol`, `estado`) VALUES ('$nombre','$correo','$clave','cliente',1);";
            //  echo $sql;
              $this->selcot($sql);
        }
        function updusu($correo,$clave){
            $sql = "UPDATE usuario SET claveUsuario='$clave',rol='cliente'  WHERE  correoUsuario='$correo';";
            // echo $sql;
              $this->selcon($sql);
        }

        function delusu($correo){
            $sql="DELETE FROM usuario WHERE correoUsuario='$correo';";
            // echo $sql;
              $this->selcon($sql);
        }
        

        function selrece1($correo){
            $sql="SELECT * FROM usuario WHERE correoUsuario='$correo';";
            // echo $sql;
             $data = $this->selcot($sql);
            return $data;
        }

       
}

?>