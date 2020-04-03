<?php 

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try{
  
    $pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")  );

}catch(PDOExeption $e){
    echo "<script>alert('Error...'</script>)";
}


 function getPDO () {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=tienda', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare('SELECT * FROM tblproductos');
       $sql->execute();
       $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
      }  
      catch(PDOException $e){
        print "¡Error!: <br/>";  
        return null;
      }
  }

  

?>