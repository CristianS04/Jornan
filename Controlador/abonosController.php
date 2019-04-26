<?php
    
    include_once "../../../Modelo/abonosModel.php";
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/pagoModel.php";
    require_once "../../../Controlador/pagoController.php";

    
    class AbonoController extends Conexion
    {


        
        public function Listar()
        {
            $datosAbono=array();
            $consulta="SELECT * FROM abonos ORDER BY idAbono";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();
               
                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $abono= new abonoModel();
                    $abono->__SET('idAbono', $dato->idAbono);
                    $abono->__SET('fecha', $dato->fecha);
                    $abono->__SET('valor', $dato->valor);
                    $datosAbono[]=$abono;
                }

                return $datosAbono;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

    

        public function Insertar(abonoModel $abono)
        {
            $var= $abono->__GET('idAbono');
            $pago= new pagoController();
            
            $vari = $pago->ComprobarEstadoPago($var);

            if($vari == true){
            
            $insertar="INSERT INTO abonos (fecha,valor) VALUES (?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    
  
                    $abono->__GET('fecha'),
                    $abono->__GET('valor')
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }else{
            echo "<script>alert('No se pudo hacer la insercción')</script>";
        } 
        }

        public function Buscar($idAbono)
        {
            

            $buscar="SELECT * FROM abonos WHERE idAbono=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idAbono));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $abono= new abonoModel();
                $abono->__SET('idAbono', $dato->idAbono);
                $abono->__SET('fecha', $dato->fecha);
                $abono->__SET('valor', $dato->valor);
                return $abono;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(abonoModel $abono)
        {
            $insertar="UPDATE abonos SET fecha=?,valor=? WHERE idAbono=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                
                    $abono->__GET('fecha'),
                    $abono->__GET('valor'),
                    $abono->__GET('idAbono')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function Eliminar($idAbono)
        {
            $borrar="DELETE FROM abonos WHERE idAbono=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idAbono));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>