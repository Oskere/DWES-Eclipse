<?php
    $email= $_GET['email'];

    $mysqli = new mysqli("localhost", "root", "", "ejercicio1");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $sentencia="DELETE FROM `alumnos` WHERE Email='".$email."'";
    $query = mysqli_query($mysqli,$sentencia);

echo 'Fue un placer';
?>