<?php
include("login_BD.php");
$alert = '';
if (!empty($_SESSION['Active'])){
    header("location:Sistema/indexU.php");
} else {
    if (isset($_POST['Ingresar'])){ 
        if (empty($_POST['Usuario_i']) || empty($_POST['password'])){
            $alert = 'Ingrese su Usuario o Contreseña';
        } else {
            $Usuario = trim($_POST['Usuario_i']);
            $contraseña = trim($_POST['password']);

            $consulta = "SELECT * FROM usuario WHERE Usuario = '$Usuario'";
            $resultado = mysqli_query($conexion, $consulta);
            $filas = mysqli_num_rows($resultado);

            if ($filas > 0){
                $data = mysqli_fetch_array($resultado);
                if (password_verify($contraseña, $data['clave'])){
                    $_SESSION['Active'] = true;
                    $_SESSION['Usuario'] = $data['Usuario'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['apellido'] = $data['apellido'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['idUsuario'] = $data['idUsuario'];
                    $_SESSION['idrol'] = $data['idrol'];
        
                    header("location:Sistema/indexU.php");
                } else {
                    echo '<script>alert ("Usuario o contraseña incorrecta");</script>';
                    session_destroy();
                }
            } else {
                echo '<script>alert ("Usuario o contraseña incorrecta");</script>';
                session_destroy();
            }

            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }
    }
}
?>
