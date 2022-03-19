<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Home</title>
</head>
<body>
    <header>
        <?php include_once 'navbar.php';
        require_once '../php/conexion.php';
        $connect= connect();
        $sql ="SELECT * FROM notas";
        $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

        ?>
    </header>
    <div class="btn-toolbar">
        <a href="calnotas.php">
        <button class="btn btn-primary">Calcular promedio</button>
        </a>
        <a href="../reportes/reportenotas.php">
        <button class="btn">Reporte</button>
        </a>
    </div>
    <div class="well">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Curso</th>
                    <th>Materia</th>
                    <th>Tareas</th>
                    <th>Trab Individual</th>
                    <th>Trab Grupal</th>
                    <th>Lecciones</th>
                    <th>Prueba Parcial</th>
                    <th>Suma</th>
                    <th>Promedio Parcial</th>
                    <th style="width: 36px;"></th>
                </tr>
            </thead>
            <?php 
            while($row=$query->fetch_assoc()){

            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['alumno'] ?></td>
                    <td><?php echo $row['curso'] ?></td>
                    <td><?php echo $row['materia'] ?></td>
                    <td><?php echo $row['tareas'] ?></td>
                    <td><?php echo $row['trab_individual'] ?></td>
                    <td><?php echo $row['trab_grupal'] ?></td>
                    <td><?php echo $row['lecciones'] ?></td>
                    <td><?php echo $row['prueba_parcial'] ?></td>
                    <td><?php echo $row['suma'] ?></td>
                    <td><?php echo $row['promedio'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>"><i class="icon-pencil"></i></a>
                        <a href="../php/delete.php?id=<?php echo $row['id'] ?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php  }?>
        </table>
    </div>
    <div class="pagination">
        <ul>
            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
    
</body>

</html>