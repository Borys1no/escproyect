<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
    <?php require_once 'scripts/scripts.php'; ?>
    <title>Login</title>

</head>

<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 ads ">
                <h1><span id="fl">Escuela de Educación Básica partícular </span><span id="sl"> "Joaquín Gallegos Lara" </span></h1>
            </div>
            <div class="col-md-6 login-form">
                <div class="profile-img">
                    <img src="assets/logo.jpg" alt="profile_img" height="140px" width="140px;">
                </div>
                <h3>Login</h3>
                <form method="POST" id="login">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Usuario" id="usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="Contraseña" id="password" required>
                    </div>
                    <div class="form-group">
                        <span id="btnLogin" class="btn btn-primary btn-lg btn-block">Iniciar sesion</span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnLogin').click(function() {
            if ($('#usuario').val()=="") {
                alertify.alert("Ingresa un usuario valido*");
                return false;
            } else if ($('#password').val()=="") {
                alertify.alert("Ingresa una contraseña valida*");
                return false;
            }
            cadena = "usuario=" + $('#usuario').val() +
                "&password=" + $('#password').val();
            $.ajax({
                type:"POST",
                url:"php/login.php",
                data:cadena,
                success:function(r) {
                    if(r==1) {
                        window.location="vista/home.php";
                    }else{
                        alertify.alert("Usuario o contraseña son incorrectas");
                    }
                }
            });
        });
    });
</script>