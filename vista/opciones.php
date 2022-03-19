<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/dash.css">
    <title>Opciones</title>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav">

                <a class="nav-link navlogo text-center" href="opciones.php">
                    <img src="../assets/logo.jpg">
                </a>


                <li class="nav-item">
                    <a class="nav-link sidefrst" href="opciones.php">
                        <span class="textside">Usuarios</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link sidesecnd" href="aggUsuarios.php">
                        <span class="textside">Añadir usuario</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesthrd" href="home.php">
                        <span class="textside">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesix" href="../php/close.php">
                        <span class="textside">Cerrar sesion</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav2 ml-auto">
                <li class="dropdown">
                    <a href="#" class="" data-toggle="dropdown">Bienvenido</a>

                </li>
            </ul>

        </div>
    </nav>
    <?php require_once '../php/conexion.php';
    $connect = connect();
    $sql = "SELECT COUNT(*) FROM users";
    $execute = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    ?>
    <div class="content-wrapper">
        <?php while ($row = $execute->fetch_row()) {

        ?>
            <div class="container-fluid">
                <div class="row">

                    <!-- Icon Cards-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <span class="btn btn-user"></span>
                                </div>
                                <div class="col-lg-15 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Usuarios</h4>
                                    <h2><?php echo $row[0]; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php require_once '../php/conexion.php';
        $connect = connect();
        $sql = "SELECT * FROM users";
        $execute2 = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        ?>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Listado de <b>Usuarios</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="aggUsuarios.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agg Nuevo</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Curso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php while ($column = $execute2->fetch_assoc()) {

                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $column['nombres']; ?></td>
                                <td><?php echo $column['apellidos']; ?></td>
                                <td><?php echo $column['correo']; ?></td>
                                <td><?php echo $column['curso_cargo']; ?></td>
                                <td>
                                    <a href="edUser.php?id=<?php echo $column['id']; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                    <a href="../php/deUser.php?id=<?php echo $column['id']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>