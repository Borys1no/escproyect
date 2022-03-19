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
    <?php require_once '../php/conexion.php'; 
    $connect = connect();
    $id= $_REQUEST['id'];
    $sql = "SELECT * FROM users WHERE id ='$id'";
    $execute = mysqli_query($connect, $sql)or die(mysqli_error($connect));
    $row = $execute->fetch_assoc();
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
           

            <ul class="navbar-nav2 ml-auto">
                <li class="dropdown">
                    <a href="#" class="" data-toggle="dropdown">Bienvenido</a>
                    
                </li>
                
            </ul>
            <ul class="navbar-nav1 ml-auto">
                <li class="dropdown">
                    <a href="#" class="" data-toggle="dropdown">Cerrar sesion</a>
                    
                </li>
                
            </ul>

        </div>

    </nav>

    <form action="../php/actualizarUser.php?id=<?php echo $row['id'] ?>" method="POST">
    <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				
				<h2>Editar usuarios</h2>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" >Nombres:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nombres" placeholder="Insertar Nombres" name="nombres" value="<?php echo $row['nombres'] ?>" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" >Apellidos:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="apellidos" placeholder="Insertar Apellidos" name="apellidos" value="<?php echo $row['apellidos'] ?>" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" >Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Insertar email" name="email" value="<?php echo $row['correo'] ?>" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2">Contraseña:</label>
				  <div class="col-sm-10">
                  <input type="password" class="form-control" id="pass" placeholder="***********" name="password" value="<?php echo $row['password'] ?>" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-2" >Curso:</label>
				  <div class="col-sm-10">
                  <input type="text" class="form-control" id="curso" placeholder="Ingrese el curso" name="curso" value="<?php echo $row['curso_cargo'] ?>" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-warning">Actualizar</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>

</html>