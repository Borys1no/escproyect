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
    <section id="form">
        <ul class="navbar-nav2 ml-auto">
            <a href="home.php" class="" data-toggle="dropdown">Home</a>
        </ul>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase">Calcule el promedio
                    </h3>
                    <img src="../assets/logo.jpg" alt="cor de fundo" width="100px" height="100px">
                    <p>Ingrese los respectivos datos no deje ningun campo vacio</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="../php/queryNotas.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h5 class="text-left">Datos del estudiante</h5>
                                        <input type="text" class="form-control" id="inputDado" placeholder="Nombres" name="nombres" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h5 class="text-left">****</h5>
                                        <input type="text" class="form-control" id="inputDado" placeholder="Ingrese el curso del alumno" name="curso" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputDado" placeholder="Materia " name="materia" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="ntarea" placeholder="Notas de tarea" name="tareas" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="nindividual" placeholder="Trabajo individual" name="individual" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="ngrupal" placeholder="Trabajo grupal" name="grupal" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="nlecciones" placeholder="Lecciones" name="lecciones" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="pparcial" placeholder="Prueba parcial" name="prueba" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="tsuma" placeholder="Suma:" name="suma">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="tpromedio" placeholder="Promedio:" name="promedio">
                                    </div>
                                </div>


                                <input type="button" class="btn btn-primary" onclick="calpromedio()" value="Calcular">
                                <input type="submit" class="btn btn-secondary" value="Guardar"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script type="text/javascript">
    function promedio(id) {
        return document.getElementById(id);
    }

    function calpromedio() {
        var ntareas = parseFloat(promedio('ntarea').value);
        var nidividual = parseFloat(promedio('nindividual').value);
        var ngrupal = parseFloat(promedio('ngrupal').value);
        var lecciones = parseFloat(promedio('nlecciones').value);
        var pruebap = parseFloat(promedio('pparcial').value);
        var suma = parseFloat(ntareas + nidividual + ngrupal + lecciones + pruebap);
        promedio('tsuma').value = parseFloat(suma);
        var promediof = parseFloat(suma) / 5;
        promedio('tpromedio').value = parseFloat(promediof);


    }
</script>