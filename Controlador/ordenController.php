<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/ordenModel.php";
    include_once "../../../Modelo/pagoModel.php";
    require_once "../../../Controlador/pagoController.php";
    

    class OrdenController extends Conexion
    {
        public function Listar()
        {
            $datosOrden=array();
            $consulta="SELECT * FROM ordenproduccion ORDER BY idOrdenProduccion";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $orden= new OrdenModel();
                    $orden->__SET('idOrdenProduccion', $dato->idOrdenProduccion);
                    $orden->__SET('fechaInicio', $dato->fechaInicio);
                    $orden->__SET('fechaFinal', $dato->fechaFinal);
                    $orden->__SET('estado', $dato->estado);
                    $datosOrden[]=$orden;
                }

                return $datosOrden;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        
        public function Insertar(OrdenModel $orden)
        {
            $var= $orden->__GET('idOrdenProduccion');
            $pago= new pagoController();
            
            $vari = $pago->ComprobarEstadoPago($var);

            if($vari == true){
                $insertar="INSERT INTO ordenproduccion (fechaInicio,fechaFinal,estado) VALUES (?,?,?)";
                try{
                    $this->conexion->prepare($insertar)->execute(array(
                        $orden->__GET('fechaInicio'),
                        $orden->__GET('fechaFinal'),
                        $orden->__GET('estado')
                    ));
                        return true;
                }catch (Exception $e){
                    die($e->getMessage());
                }
            }else{
                echo "<script>alert('No se pudo hacer la inserción')</script>";
            }


           
        }

        public function Buscar($idOrdenProduccion)
        {
            $buscar="SELECT * FROM ordenproduccion WHERE idOrdenProduccion=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idOrdenProduccion));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $orden= new OrdenModel();
                    $orden->__SET('idOrdenProduccion', $dato->idOrdenProduccion);
                    $orden->__SET('fechaInicio', $dato->fechaInicio);
                    $orden->__SET('fechaFinal', $dato->fechaFinal);
                    $orden->__SET('estado', $dato->estado);

                return $orden;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(OrdenModel $orden)
        {
            $insertar="UPDATE ordenproduccion SET fechaInicio=?,fechaFinal=?,estado=? WHERE idOrdenProduccion=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $orden->__GET('fechaInicio'),
                    $orden->__GET('fechaFinal'),
                    $orden->__GET('estado'),
                    $orden->__GET('idOrdenProduccion')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function Eliminar($idOrdenProduccion)
        {
            $borrar="DELETE FROM insumos,detalle_cotizacion_insumo,cotizacion,ordenproduccion
            JOIN detalle_cotizacion_insumo ON detalle_cotizacion_insumo.idInsumo = insumo.idInsumo
            JOIN cotizacion ON detalle_cotizacion_insumo.idCotizacion = cotizacion.idCotizacion
            JOIN ordenproduccion ON ordenproduccion.idOrdenProduccion = cotizacion.idOrdenProduccion
            WHERE ordenproduccion.idOrdenProduccion=?
            
            
            
            ";
            try{
                $this->conexion->prepare($borrar)->execute(array($idOrdenProduccion));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>