<?php
include("../../login_BD.php");
if(isset($_POST['actua_con'])){ 
    if (strlen($_POST['pasnow']) >= 1 && strlen($_POST['pasnew']) >= 1 && strlen($_POST['pasnew1']) >= 1 ){ 
        $pasnow = trim($_POST['pasnow']);
        $pasnew= trim($_POST['pasnew']);
        $pasnew1 = trim($_POST['pasnew1']);
        $idUsuario = $_SESSION['idUsuario'];
     if($pasnow==$_SESSION['clave']){
        if($pasnew==$pasnew1){
            $consulta = "UPDATE usuario SET clave='$pasnew' WHERE idUsuario='$idUsuario'";
        $resultado = mysqli_query($conexion,$consulta);
        
        if($resultado){
            
             ?> 
             <script>alert('Actualizado correctamente, Inicie session nuevamente');</script>
             <?php
        } else{
            ?> 
            <script>alert('Ha ocurrido un error');</script>
            <?php
        }
        }
        
     }
       
    }      else{
        ?> 
        <script>alert('Completa los campos')</script>
        <?php
    }
}

?>