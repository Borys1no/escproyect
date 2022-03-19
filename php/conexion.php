<?php 


function connect(){
    return $conexion = mysqli_connect("localhost", "root", "", "escuela_data");
    if(connect()){
        die("conexion fallida: ".$conexion->connect_error);
    }
    echo "Conexion exitosa ";
}


?> 