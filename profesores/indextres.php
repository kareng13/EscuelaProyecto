<?php
require_once("../lib/connect.php");
$consulta= "SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Profesores </title>
</head>
<body>
<h1> Profesores </h1>
    <table>
        <thead>
            <tr>
                <th> id </th>
                <th> nombre </th>
                <th> apellido </th>
                <th> telefono </th>
                <th> correo </th>
                <th> status </th>
</thead>
</tr>
<tbody>
    <?php
    while ($fila = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $fila ["id"]; ?> </td>
            <td><?php echo $fila ["nombre"]; ?> </td>
            <td><?php echo $fila ["apellido"]; ?> </td>
            <td><?php echo $fila ["telefono"]; ?> </td>
            <td><?php echo $fila ["correo"]; ?> </td>
            <td><?php echo $fila ["status"]; ?> </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</body>
</html>