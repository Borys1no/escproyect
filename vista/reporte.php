<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reporte</title>
</head>
<?php
require_once '../php/conexion.php';
$connect = connect();

?>

<body>
    <div class="container">
    <span>Reportes de notas </span>
        
        <table class="custom-table">
            <thead>
                <tr>

                    <th scope="row">Asignatura</th>
                    <th>Nombres</th>
                    <th>Curso</th>
                    <th>Tareas</th>
                    <th>Trab individual</th>
                    <th>Trab grupal</th>
                    <th>Lecciones</th>
                    <th>Prueba parcial</th>
                    <th>Suma</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <?php $sql = "SELECT * FROM notas";
            $execute = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            while ($row = $execute->fetch_assoc()) {


            ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['materia']; ?></td>
                        <td><?php echo $row['alumno']; ?></td>
                        <td><?php echo $row['curso']; ?></td>
                        <td><?php echo $row['tareas']; ?></td>
                        <td><?php echo $row['trab_individual']; ?></td>
                        <td><?php echo $row['trab_grupal']; ?></td>
                        <td><?php echo $row['lecciones']; ?></td>
                        <td><?php echo $row['prueba_parcial']; ?></td>
                        <td><?php echo $row['suma']; ?></td>
                        <td><?php echo $row['promedio']; ?></td>

                    </tr>

                </tbody>
            <?php } ?>
        </table>
    </div>
</body>
<style type="text/css">
table {
   width: 100%;
}
th, td {
   width: 25%;

}
th{
    background-color: #F18181;
    border: 1px solid gray;
    width: 10px;
    height: 10px;
}
td{
    border: 1px solid gray;
    width: 10px;
    height: 10px;
    text-align: center;
}
caption {
   padding: 0.3em;
}
</style>

</html>