<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<form>
	<label>Nombre<input type="text" name="nombre" ></label>
	<label>Email<input type="text" name="email" ></label>
	<label>DNI<input type="text" name="DNI" ></label>
	<label>Código de matricula<input type="text" name="codMatricula" ></label>
	<label>Ciclo<input type="text" name="ciclo" ></label>
	<input type="submit">
	</form>
</body>
</html>
<?php
if (isset($_GET['nombre']) && isset($_GET['email'])&& isset($_GET['DNI'])&& isset($_GET['codMatricula'])&& isset($_GET['ciclo'])) {
    $nombre= $_GET['nombre'];
    $email = $_GET['email'];
    $DNI = $_GET['DNI'];
    $codMatricula = $_GET['codMatricula'];
    $ciclo = $_GET['ciclo'];
    
    
    $mysqli = new mysqli("localhost", "root", "", "ejercicio1");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO `alumnos`(Nombre, Email, DNI, codMatricula, Ciclo) VALUES (?, ?, ?, ?, ?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("sssss", $nombre , $email,  $DNI , $codMatricula , $ciclo)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
    $resultado = $mysqli->query("SELECT * FROM `alumnos`");
    echo "<br><br><br>";
    var_dump($resultado->fetch_all());
    header("Location: select.php");
}else{
    echo("<br>Error en parametros<br>");
    
}
?>

