<?php

class conexion{

    var $link;

    function conexion(){}

function conectarBD(){
    include("configuracion.php");

    $conn = mysqli_connect($serbd,$usubd,$pasbd,$nombd);
    if(!$conn)
    {
        die("no hay conexion :".mysqli_connect_error());
    
    }else{
        return $conn;
    }
}

function ejecon($con){
    include("configuracion.php");
    $conn=new mysqli($serbd,$usubd,$pasbd,$nombd);

        $query = mysqli_query($conn,$con);
    }
}

?>