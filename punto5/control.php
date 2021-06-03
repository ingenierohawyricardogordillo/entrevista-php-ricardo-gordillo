<?php

 include "conexion.php";

 $id = $_POST['id'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $department_id = $_POST['department_id'];
 $salary = $_POST['salary'];
 $educationlevel_id = $_POST['educationlevel_id'];

 $sqlregistro = "INSERT into appx_employee (id,firstname,lastname,department_id, salary,educationlevel_id)
                        values ('$id','$firstname','$lastname','$department_id','$salary',
                                '$educationlevel_id')";
                            
    $result_regis= mysqli_query($conexion,$sqlregistro);

    if ($result_regis == 1){
        echo "Conexion Exitosa a la Base de Datos ";
    }else{
        echo "Pailas";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
</head>
<body>

    <h1>Valores Insertados Correctamente </h1><br><br>

    <a href="index.php">Presione click Para volver</a>


    
</body>
</html>