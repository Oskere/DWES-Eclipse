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
	       font-size: 24px;
	       text-align:center;
	   }
	</style>
</head>

<?php 
/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM `alumnos`");
echo '<table class="table" border="1" bordercolor="black" cellpadding="5" cellspacing="0">';
// mostrar resultado
while ($row = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo('<td>' . $row['Nombre'] . '</td><td><a href="individual.php?email=' . $row['Email'] . '">'. $row['Email'] . '</a></td>');
    echo '</tr><tr>';
    echo '<td colspan=4><a href="delete.php?email=' . $row['Email'] .'"/>Eliminar</td>';
    echo '</tr>';
   
};
echo '<td colspan=4><a href="insert.php/>Añadir</td>';
echo '</table>';
/* se recomienda el cierre explícito */
$mysqli->close();

?>

