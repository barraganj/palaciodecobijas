<?php 
session_start();


$mensaje ="";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){

        case 'Agregar':

            if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="ok ID correcto".$ID."<br/>";
            }else{
                $mensaje.="upss ID incorrecto".$ID."<br/>";
            }

            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="ok precio".$NOMBRE."<br/>";
            }else {
                $mensaje.="upss.. algo pasa con el nombre"."<br/>";
            break;
            }

            if(is_string(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.="ok precio".$CANTIDAD."<br/>";
            }else {
                $mensaje.="upss.. algo pasa con la cantidad"."<br/>";
            break;
            }

            if(is_string(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="ok precio".$PRECIO."<br/>";
            }else {
                $mensaje.="upss.. algo pasa con el precio"."<br/>";
            break;
            }

            if(!isset($_SESSION['CARRITO'])){

                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                );
                $_SESSION['CARRITO'][1]=$producto;
                

            }else{
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            }
            //$mensaje= print_r($_SESSION,true);
            $mensaje= "Producto agregado al carrito";


        break;

        case "Eliminar":
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Elemento borrado...');</script>";
                    }
                }

            }else{
                $mensaje.="upss ID incorrecto".$ID."<br/>";
            
            }



        break;

        
        

    }
    

}


