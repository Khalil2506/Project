<?php
include("login_BD.php");
if(isset($_POST['registrar'])){ 
    if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen ($_POST['Usuario'])>=1 && strlen($_POST['password']) >= 1){ 
        $name = trim($_POST['Nombres']);
        $apellido= trim($_POST['Apellidos']);
        $email = trim($_POST['Correo']);
        $usuario = trim($_POST['Usuario']);
        $contraseña = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $consulta = "INSERT INTO usuario(nombre, apellido, email, Usuario, clave, idrol) VALUES ('$name','$apellido','$email','$usuario','$contraseña','1')";
        $resultado = mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
        if($resultado){
            
             header("location:login.php");
        } else{
            ?> 
            <script>alert('Ha ocurrido un error');</script>
            <?php
        }
    }      else{
        ?> 
        <script>alert('Completa los campos')</script>
        <?php
    }
}

?>