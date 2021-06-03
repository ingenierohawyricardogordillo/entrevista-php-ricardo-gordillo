<?php
    $host='localhost';
    $user='root';
    $password='';
    $db='prueba';

    $conexion=@mysqli_connect($host,$user,$password,$db);

    if(!$conexion){
        echo"error de conexion";
    }else{
        //echo"conexion full";

    }
?>
