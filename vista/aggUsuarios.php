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

    <form action="../php/queryUser.php" method="POST">
    <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				
				<h2>Registro de usuarios</h2>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" >Nombres:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nombres" placeholder="Insertar Nombres" name="nombres" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" >Apellidos:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="apellidos" placeholder="Insertar Apellidos" name="apellidos" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" >Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Insertar email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2">Contraseña:</label>
				  <div class="col-sm-10">
                  <input type="password" class="form-control" id="pass" placeholder="***********" name="password" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-2" >Curso:</label>
				  <div class="col-sm-10">
                  <input type="text" class="form-control" id="curso" placeholder="Ingrese el curso" name="curso" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>

</html>