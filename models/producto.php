<?php include("conexion.php");
class producto{
    function producto(){}
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
        function insusu($nombre,$precio,$descripcion,$imagen,$estado,$cantidad){
            
            $sql = "INSERT INTO `producto` (`nombre`, `precio`, `descripcion`, `imagen`, `estado`, `cantidadDisponible`) VALUES ('$nombre','$precio','$descripcion','$imagen','1','$cantidad');";
            //  echo $sql;
              $this->selcot($sql);
        }
        function updusu($nombre,$precio,$descripcion,$imagen,$estado,$cantidad){
            $sql = "UPDATE producto SET precio='$precio',descripcion='$descripcion',imagen='$imagen',estado=1, cantidadDisponible='cantidad'  WHERE  nombre='$nombre';";
            // echo $sql;
              $this->selcon($sql);
        }

        function delusu($nombre){
            $sql="DELETE FROM producto WHERE nombre='$nombre';";
            // echo $sql;
              $this->selcon($sql);
        }
        

        function selrece1($nombre){
            $sql="SELECT * FROM producto WHERE nombre='$nombre';";
            // echo $sql;
             $data = $this->selcot($sql);
            return $data;
        }
}

?>