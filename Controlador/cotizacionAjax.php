<?php
		$conexion=new PDO("mysql:host=localhost;dbname=jornan2", "root", "");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_REQUEST['idInsumo']) && isset($_REQUEST['cantidad']) && isset($_REQUEST['valor'])) {
    $idInsumo=$_REQUEST['idInsumo'];
    $cantidad=$_REQUEST['cantidad'];
    $valor=$_REQUEST['valor'] * $cantidad;
    $detalles="INSERT INTO tmp (id_insumo,cantidad,valor) values (?,?,?)";
    try{
			$conexion->prepare($detalles)->execute(array(
				$idInsumo,
                $cantidad,
                $valor,
				));
                echo 1;			
			} catch (Exception $e) {
				echo $e->getMessage();
			}

}else if (isset($_REQUEST['listar'])) {
    $json=array();
        $consulta="SELECT id_tmp,t.valor,id_insumo,Cantidad,i.nombre FROM tmp t JOIN insumo i ON t.id_insumo = i.idInsumo";
        try {
            $resultado=$conexion->query($consulta);
            $resultado->execute();
            
            foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $datos) {
                $json[] = array(
                    'idTmp' => $datos->id_tmp,
                    'idInsumo' => $datos->id_insumo,
                    'cantidad' => $datos->Cantidad,
                    'valor' => $datos->valor,
                    'nombre' => $datos->nombre,
                );
            }
            $jsonstring = json_encode($json);
            echo $jsonstring;

        } catch (Exception $e) {
            die($e->getMessage());
        }
}else if (isset($_REQUEST['idInsumo'])) {
        $cod = $_REQUEST['idInsumo'];
        $consulta="DELETE FROM `tmp` WHERE `id_tmp`=$cod";
        try {
            $resultado=$conexion->query($consulta);
            $resultado->execute();
          echo "delete";
        } catch (Exception $e) {
            die($e->getMessage());
        }
} else{
    $json=array();
    $consulta="SELECT * FROM insumo";
    try {
        $resultado=$conexion->query($consulta);
        $resultado->execute();
        
        foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $datos) {
            $json[] = array(
                'idInsumo' => $datos->idInsumo,
                'nombre' => $datos->nombre,
                'valor' => $datos->valor,
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;

    } catch (Exception $e) {
        die($e->getMessage());
    }
}