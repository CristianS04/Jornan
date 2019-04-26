<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/cotizacionModel.php";
    

    class CotizacionController extends Conexion
    {
        public function ListarCotizacion()
        {
            
            $datosCotizacion=array();
            $consulta="SELECT * FROM cotizacion ORDER BY idCotizacion";
            try{
               
                $resultado=$this->conexion->query($consulta);
               
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $cotizacion= new CotizacionModel();
                    $cotizacion->__SET('idCotizacion', $dato->idCotizacion);
                    $cotizacion->__SET('idAgenda', $dato->idAgendaCita);
                    $cotizacion->__SET('nombreProducto', $dato->nombreProducto);
                    $cotizacion->__SET('fecha', $dato->fecha);
                    $cotizacion->__SET('descuento', $dato->descuento);
                    $cotizacion->__SET('total', $dato->total);
                    $cotizacion->__SET('estado', $dato->estado);
                    $datosCotizacion[]=$cotizacion;
                }

                return $datosCotizacion;
                
            }catch(Exception $e){
                die($e->getMessage());
            }
        }  

        public function CancelarCotizacion()
        {
           $consulta="SELECT * FROM cotizacion";
           $resultado=$this->conexion->query($consulta);
           
    
           foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
               $cotizacion= new CotizacionModel();
               $cotizacion->__SET('idCotizacion', $dato->idCotizacion);
               $cotizacion->__SET('idAgenda', $dato->idAgendaCita);
               $cotizacion->__SET('nombreProducto', $dato->nombreProducto);
               $cotizacion->__SET('fecha', $dato->fecha);
               $cotizacion->__SET('descuento', $dato->descuento);
               $cotizacion->__SET('total', $dato->total);
               $cotizacion->__SET('estado', $dato->estado);
               
   
           date_default_timezone_set('America/Bogota');
           $fecha_actual=date("Y-m-d");
           $id=$cotizacion->__GET('idCotizacion');
           
           $fechaCotizacion=$cotizacion->__GET('fecha');
           $estado=$cotizacion->__GET('estado');
           
           
   
           $dias = (strtotime($fechaCotizacion)-strtotime($fecha_actual))/86400; $dias =abs($dias); 
           $dias=floor($dias);
         
           
          
           
           if ($dias > 15 ) {
               if ($estado==1) {
                   $sentencia = "UPDATE cotizacion SET estado=4 WHERE idCotizacion=$id";
                   $resultado=$this->conexion->query($sentencia);
               }
               
              }
           }
           
        }

        public function Insertar(CotizacionModel $cotizacion)
        {
            //Insertamos la cotización
            $insertar="INSERT INTO cotizacion (idAgendaCita,nombreProducto,fecha,descuento,total,subtotal,estado) VALUES (?,?,?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(

                    $cotizacion->__GET('idAgenda'),
                    $cotizacion->__GET('nombreProducto'),
                    $cotizacion->__GET('fecha'),
                    $cotizacion->__GET('descuento'),
                    $cotizacion->__GET('total'),
                    $cotizacion->__GET('subtotal'),
                    $cotizacion->__GET('estado')
                  
                ));
                // Seleccionamos la ultima cotización realizada
                $counsulta1="select LAST_INSERT_ID(idCotizacion) as last from cotizacion order by idCotizacion desc limit 0,1";
                $respuesta = $this->conexion->prepare($counsulta1);
                $respuesta->execute();
                $datoU=$respuesta->fetch(PDO::FETCH_OBJ);
                $idCotizacionU = $datoU->last;
                //Seleccionamos todos los productos de la tabla temporal
                $counsulta2="SELECT * FROM `tmp`";
                $respuesta2 = $this->conexion->prepare($counsulta2);
                $respuesta2->execute();
                //Registramos todos los productos en la tabla detalle
                foreach ($respuesta2->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $insertarDetalle="INSERT INTO `detalle_cotizacion_insumo`(`idInsumo`, `idCotizacion`, `cantidad`) VALUES (?,?,?)";

                    //insercion en la tabla detalle de insumo
                    $this->conexion->prepare($insertarDetalle)->execute(array(
                        $dato->id_insumo,
                        $idCotizacionU,
                        $dato->Cantidad,
                    ));
                    
                }
                $eliminarTMP="DELETE FROM tmp;";
                $this->conexion->prepare($eliminarTMP)->execute();
                return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function BuscarCotizacion($idCotizacion)
        {
            $buscar="SELECT * FROM cotizacion WHERE idCotizacion=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idCotizacion));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $cotizacion= new CotizacionModel();
                    $cotizacion->__SET('idCotizacion', $dato->idCotizacion);
                    $cotizacion->__SET('idAgenda', $dato->idAgendaCita);
                    $cotizacion->__SET('nombreProducto', $dato->nombreProducto);
                    $cotizacion->__SET('fecha', $dato->fecha);
                    $cotizacion->__SET('descuento', $dato->descuento);
                    $cotizacion->__SET('total', $dato->total);
                    $cotizacion->__SET('subtotal', $dato->subtotal);
                    $cotizacion->__SET('estado', $dato->estado);


                   

                return $cotizacion;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizarco(CotizacionModel $cotizacion)
        {
            $insertar="UPDATE cotizacion SET idAgendaCita=?,nombreProducto=?,fecha=?,
            descuento=?,total=?, subtotal=?, estado=? WHERE idCotizacion=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $cotizacion->__GET('idAgenda'),
                    $cotizacion->__GET('nombreProducto'),
                    $cotizacion->__GET('fecha'),
                    $cotizacion->__GET('descuento'),
                    $cotizacion->__GET('total'),
                    $cotizacion->__GET('subtotal'),
                    $cotizacion->__GET('estado'),
                    $cotizacion->__GET('idCotizacion')
                    
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function CambiarEstado($cambio,$idCotizacion)
        {
            $borrar="UPDATE cotizacion SET estado=$cambio WHERE=$idCotizacion";
            try{
                $this->conexion->prepare($borrar)->execute(array($idCotizacion));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function ConsulCot(){
            $datosCot=array();
            $consulta="SELECT * FROM cotizacion ORDER BY idCotizacion";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $cot= new CotizacionModel();
                    $cot->__SET('idCotizacion', $dato->idCotizacion);
                    $cot->__SET('idAgenda', $dato->idAgendaCita);
                    $cot->__SET('nombreProducto', $dato->nombreProducto);
                    $cot->__SET('fecha', $dato->fecha);
                    $cot->__SET('descuento', $dato->descuento);
                    $cot->__SET('total', $dato->total);
                    $cot->__SET('subtotal', $dato->subtotal);
                    $cot->__SET('estado', $dato->estado);

                    $datosCot[]=$cot;
                }

                return $datosCot;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>