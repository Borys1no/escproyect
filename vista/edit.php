<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/calnotas.css">
    <title>Calcular promedio</title>
</head>

<body>
    <header>
        <?php
        require_once '../php/conexion.php';
        $connect = connect();
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM notas WHERE id = '$id'";
        $execute = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row = $execute->fetch_assoc();

        ?>
    </header>
    <section id="form">
        <ul class="navbar-nav2 ml-auto">
            <a href="home.php" class="" data-toggle="dropdown">Home</a>
        </ul>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase">Actualizar
                    </h3>
                    <img src="../assets/logo.jpg" alt="cor de fundo" width="100px" height="100px">
                    <p>Ingrese los respectivos datos no deje ningun campo vacio</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="../php/actualizar.php?id=<?php echo $row['id']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h5 class="text-left">Datos del estudiante</h5>
                                        <input type="text" class="form-control" id="#" placeholder="Nombres" name="nombres" value="<?php echo $row['alumno']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5 class="text-left">****</h5>
                                        <input type="text" class="form-control" id="#" placeholder="Ingrese el curso del alumno" name="curso" value="<?php echo $row['curso']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="#" placeholder="Materia " name="materia" value="<?php echo $row['materia']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="ntarea" placeholder="Notas de tarea" name="tareas" value="<?php echo $row['tareas']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="nindividual" placeholder="Trabajo individual" name="individual" value="<?php echo $row['trab_individual']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="ngrupal" placeholder="Trabajo grupal" name="grupal" value="<?php echo $row['trab_grupal']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="nlecciones" placeholder="Lecciones" name="lecciones" value="<?php echo $row['lecciones']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="pparcial" placeholder="Prueba parcial" name="prueba" value="<?php echo $row['prueba_parcial']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="tsuma" placeholder="Suma:" name="suma" value="<?php echo $row['suma']; ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="tpromedio" placeholder="Promedio:" name="promedio" value="<?php echo $row['promedio']; ?>">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-warning" value="Actualizar"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>