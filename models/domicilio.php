<?php include("conexion.php");
class domicilio{
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
        function inscli($fecha1,$fecha2){
             
            $sql = "INSERT INTO `domicilio` (`fechaConfirmacion`,`fechaEntrega`,`estado`,`idVenta`,`idEmpleado`) VALUES ('$fecha1','$fecha2','proceso',1,2);";
            //  echo $sql;
              $this->selcot($sql);
        }
        function updcli($fecha1,$fecha2){
            $sql = "UPDATE domicilio SET fechaEntrega='$fecha2', estado='proceso', idVenta=1 ,idEmpleado=2 WHERE  fechaConfirmacion='$fecha1';";
            // echo $sql;
              $this->selcon($sql);
        }
 
        function delcli(){
            $sql="DELETE FROM domicilio ";
            // echo $sql;
              $this->selcon($sql);
        }
        

        function selcli(){
            $sql="SELECT * FROM persona ";
            // echo $sql;
             $data = $this->selcot($sql);
            return $data;
        }
}

?>