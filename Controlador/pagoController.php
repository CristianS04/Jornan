<?php
    
    include_once "../../../Modelo/pagoModel.php";
    include_once "../../../Modelo/configuracion.php";
    

    class PagoController extends Conexion
    {
        public function Listar()
        {
            $datosPago=array();
            $consulta="SELECT * FROM pago ORDER BY idPago";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $pago= new pagoModel();
                    $pago->__SET('idPago', $dato->idPago);
                    $pago->__SET('idCotizacion', $dato->id_Cotizacion);
                    $pago->__SET('dirDom', $dato->direccionDomicilio);
                    $pago->__SET('recDom', $dato->recargoDomicilio);
                    $pago->__SET('monto', $dato->monto);
                    $pago->__SET('estado', $dato->estado);
                    $datosPago[]=$pago;
                }

                return $datosPago;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

       

    

        public function Insertar(pagoModel $pago)
        {
            $insertar="INSERT INTO pago (id_Cotizacion,direccionDomicilio,recargoDomicilio,monto,estado) VALUES (?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    
                    $pago->__GET('idCotizacion'),
                    $pago->__GET('dirDom'),
                    $pago->__GET('recDom'),
                    $pago->__GET('monto'),
                    $pago->__GET('estado')
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Buscar($idPago)
        {
            $buscar="SELECT * FROM pago WHERE idPago=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idPago));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $pago= new pagoModel();
                $pago->__SET('idPago', $dato->idPago);
                $pago->__SET('idCotizacion', $dato->id_Cotizacion);
                $pago->__SET('dirDom', $dato->direccionDomicilio);
                $pago->__SET('recDom', $dato->recargoDomicilio);
                $pago->__SET('monto', $dato->monto);
                
                return $pago;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function ComprobarEstadoPago($idPago)
        {
            $consulta="SELECT estado FROM pago WHERE idPago=?";
            $resultado=$this->conexion->query($consulta);
            $pago= new pagoModel();
            $estado=$pago->__SET('estado');

            if ($estado==1) {
                $var=true;
                return $var;

            }else{
            $var=false;
            return $var;
            }
        } 

        public function Actualizar(pagoModel $pago)
        {
            $insertar="UPDATE pago SET id_Cotizacion=?,direccionDomicilio=?,recargoDomicilio=?,monto=? WHERE idPago=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $pago->__GET('idCotizacion'),
                    $pago->__GET('dirDom'),
                    $pago->__GET('recDom'),
                    $pago->__GET('monto'),
                    $pago->__GET('idPago')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function Eliminar($idPago)
        {
            $borrar="DELETE FROM pago WHERE idPago=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idPago));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>