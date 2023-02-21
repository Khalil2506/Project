<?php 
$mensaje = "";
if(isset($_POST['btn_añadir'])){
    switch(isset($_POST['btn_añadir'])){
        case 'agregar':
            if(is_numeric($_POST['codigo'])){
                $id = $_POST['codigo'];
                $mensaje.= "Ok cantidad correcto".$id."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(is_numeric($_POST['cod_pro'])){
                $cod = $_POST['cod_pro'];
                $mensaje.= "Ok cantidad correcto".$cod."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(is_string($_POST['titulo'])){
                $nombre = $_POST['titulo'];
                $mensaje.= "Ok cantidad correcto".$nombre."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(is_numeric($_POST['precio'])){
                $precio= $_POST['precio'];
                $mensaje.= "Ok cantidad correcto".$precio."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(is_numeric($_POST['cantidad'])){
                $cantidad = $_POST['cantidad'];
                $mensaje.= "Ok cantidad correcto".$cantidad."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }

            if(is_string($_POST['tamaño'])){
                $tamaño = $_POST['tamaño'];
                $mensaje.= "Ok cantidad correcto".$tamaño."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(is_string($_POST['img'])){
                $img = $_POST['img'];
                $mensaje.= "Ok cantidad correcto".$img."</br>"; 
            }else{
                $mensaje.="error"; break; 
            }
            if(!isset($_SESSION['carrito'])){
                $producto = array(
                    'id' =>$id,
                    'cod'=>$cod,
                    'nombre' => $nombre,
                    'img' => $img,
                    'tamaño'=>$tamaño,
                    'cantidad' => $cantidad,
                    'precio'=> $precio
                );
                $_SESSION['carrito'][0]=$producto;
                echo "<script> window.location.href='MenuU.php';</script>";

            }else{
                $cod_pro = array_column($_SESSION['carrito'],"cod");
                if(in_array($cod,$cod_pro)){
                    echo "<script> alert('El producto ya ha sido seleccionado');</script>";
                }else{
               $NumeroProducto = count($_SESSION['carrito']);
                $producto = array(
                    'id' =>$id,
                    'cod'=>$cod,
                    'nombre' => $nombre,
                    'img' => $img,
                    'tamaño'=>$tamaño,
                    'cantidad' => $cantidad,
                    'precio'=> $precio
                );
                $_SESSION['carrito'][$NumeroProducto]=$producto;
                echo "<script> window.location.href='MenuU.php';</script>";


            }
        }
            $mensaje = print_r($_SESSION['carrito'],true);
            break;
        case 'nada':
            echo "<script> alert('Inicie Seccion para poder agregar productos al carrito');</script>";    
           
    }
}
if(isset($_POST['btn_añadir1'])){
    switch(isset($_POST['btn_añadir1'])){
        case "eliminar": 
            if(is_numeric($_POST['codigo'])){
                $id = $_POST['codigo'];
              foreach($_SESSION['carrito'] as $indice =>$producto ){
                if($producto['id']==$id){
                    unset($_SESSION['carrito'][$indice] );
                    echo "<script> alert('elemento eliminado');</script>";
                }
              }
            }else{
                $mensaje.="error"; break; 
            }
            break;
        }
    }
    if(isset($_POST['cantidad_act'])){
       
        foreach($_SESSION['carrito'] as $indice =>$producto){
            if($producto['cod']==$_POST['nombre']){
                $_SESSION['carrito'][$indice]['cantidad']=$_POST['cantidad_act'];
                echo "<script> window.location.href='MicarritoU.php';</script>";
            }
        }


    }


?>