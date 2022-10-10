<!DOCTYPE html>
<html>
<head>
<title>Insert ordenador</title>
<meta charset="UTF-8">
</head>
<body>

	<form>
		<input name="codHZ" placeholder="codHZ"> <input name="SO"
			placeholder="SO"><label><input name="esSobremesa" type="checkbox"
			value="false">Sobremesa</label> <br> <br> <input type="submit"
			value="Guardar">
	</form>
    <?php
    include 'ordenador.php';

    $ordenadorArray = ordenador::getOrdenadoresUnselizados('storeordenador');

    // imprimir los coches del fichero
    foreach ($ordenadorArray as $ordenador) {
        $ordenador->toString();
    }

    if (isset($_GET['codHZ']) && isset($_GET['SO'])) {
        
        $codHZ = $_GET['codHZ'];
        $SO = $_GET['SO'];
        if (isset($_GET['esSobremesa']))
            $esSobremesa = $_GET['esSobremesa'];
        else
            $esSobremesa = false;

        if ($codHZ != NULL && $SO != NULL) { // se ha rellenado el form
                                             // echo "se va ha crear el ordenador";

            $ordenadorNuevo = new ordenador($codHZ, $SO, $esSobremesa);
            $ordenadorNuevo->toString();

            $ordenadorArray[] = $ordenadorNuevo;

            ordenador::guardarSerializado('storeordenador', $ordenadorArray);
        }
    }
    
    
    ?>
    
</body>
</html>
﻿
