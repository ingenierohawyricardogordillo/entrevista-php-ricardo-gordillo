<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Muesta de Datos</title>
</head>
<body>

<h1>Prueba de Desarrollo</h1>

<table border="1">
    <tr>
        <th> Apellido </th>
        <th> Nivel de Educacion </th>
    </tr>


<?php 

$query = mysqli_query($conexion,"SELECT appx_employee.lastname , appx_educationlevel.description 
FROM appx_employee INNER JOIN appx_educationlevel 
ON appx_employee.educationlevel_id=appx_educationlevel.id");


$resul=mysqli_fetch_array($query);

while($ver=mysqli_fetch_array($query)){


?>


<tr>
    <td><?php echo $ver['lastname']; ?></td>
    <td><?php echo $ver['description']; ?></td>
</tr>

<?php } ?>

</table><br><br><br>

<div align ="center" class="container">

<form action="control.php" method="POST">
    
    <label for="id">Id</label>
		<input type="number" name="id" id="id" placeholder="Digite su id"><br><br>

    <label for="firstname">Nombre</label>
		<input type="text" name="firstname" id="firstname" placeholder="Digite su Nombre"><br><br>
    
    <label for="lastname">Apellido</label>
		<input type="text" name="lastname" id="lastname" placeholder="Digite su Apellido"><br><br>

    <label for="department_id">Id Departamento</label>
		<input type="number" name="department_id" id="department_id" placeholder="Digite su Departamento"><br><br>
     
    <label for="salary">Salario</label>
		<input type="number" name="salary" id="salary" placeholder="Digite su Salario"><br><br>
	
    <label for="educationlevel_id">Nivel Educativo</label>
		<input type="number" name="educationlevel_id" id="educationlevel_id" 
            placeholder="Seleccione su nivel Educativo"><br><br>

            <input type="submit" value="Enviar Registro" class="btn_save"><br>			

    
            </div> 
</body>
</html>