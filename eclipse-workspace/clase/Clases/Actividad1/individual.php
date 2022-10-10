<?php
$mysqli = new mysqli("localhost", "root", "", "ejercicio1");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<html>
<head>
<style>
table{
    margin: auto;
    font-size:24px;
    text-align:center;
}
</style>
</head>
<?php 
/* Sentencia no preparada */
$email = htmlspecialchars($_GET['email']);
$resultado = $mysqli->query("SELECT * FROM `alumnos` WHERE Email='".$email."'");
echo '<table class="table" border="1" bordercolor="black" cellpadding="5" cellspacing="0">';
// mostrar resultado
while ($row = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo('<td>' . $row['Nombre'] . '</td><td>' . $row['DNI'] . '</a></td><td>' . $row['Email'] . '</a></td><td>' . $row['codMatricula'] . '</td><td>' . $row['Ciclo'] . '</td>');
    echo '</tr><tr>';
    echo '<td colspan=5><a href="update.php?dni=' . $row['DNI'] .'"/>Modificar</td>';
    echo '</tr>';
}
echo '</table>';
/* se recomienda el cierre explícito */
$mysqli->close();
        
?>
