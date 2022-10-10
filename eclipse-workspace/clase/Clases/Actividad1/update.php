 <?php 
    $dni= $_GET['dni'];
 ?>
 
  <html>
    	<form>
    		<label>DNI<input readonly type="text" name="dni" value="<?php echo $dni  ?>"></label>
        	<label>Nombre:<input id="Nombre" name="nombre" type=text></label>
        	<input type=submit>
    	</form>
    	
    </html>
 
 <?php
if (isset($_GET['dni']) && isset($_GET['nombre'])) {
    
    $nombre = $_GET["nombre"];
    
    $mysqli = new mysqli("localhost", "root", "", "ejercicio1");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    
    if (!($sentencia = $mysqli->prepare("UPDATE alumnos SET Nombre=? WHERE dni=?"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("ss", $nombre, $dni)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    header("Location: select.php");
    
    /* Sentencia no preparada */
//     $resultado = $mysqli->query("SELECT * FROM test");
//     var_dump($resultado->fetch_all());
}else{
    echo("<br>Error en parametros<br>");
    
}



?>
