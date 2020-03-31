<?php



session_start();


include('database.php');
if (isset($_POST) && !empty($_POST)) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['clave'];
    
    $sql = "SELECT * FROM usuario WHERE correoUsuario = '$usuario' AND  claveUsuario ='$contrasena'";
    $result = mysqli_query($conn, $sql);
    var_dump(mysqli_num_rows($result));
    
    if(mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['rol'] === "administrador") {
                var_dump($row);
                $_SESSION['user'] = $row["correoUsuario"];
                $_SESSION['role'] = $row["rol"];
                header("Location: ../views/index.php");
            }
            if ($row['rol'] === "cliente") {
                $_SESSION['user'] = $row["correoUsuario"];
                $_SESSION['role'] = $row["rol"];
                header('Location: ../views/cc/CARRITO/index.php');
                // header('Location: ../templates/nav-template-user.php');
                
            }
        }
    } else {
        echo "Error";
        header('Location: ../views/login/login.php?error');
    }
}
