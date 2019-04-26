<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/insumoModel.php";
    

    class InsumoController extends Conexion
    {
        public function listar()
        {
            $datosInsumo=array();
            $consulta="SELECT * FROM insumo ORDER BY idInsumo";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $insumo= new InsumoModel();
                    $insumo->__SET('idInsumo', $dato->idInsumo);
                    $insumo->__SET('idProveedor', $dato->idProveedor);
                    $insumo->__SET('nombre', $dato->nombre);
                    $insumo->__SET('valor', $dato->valor);
 
                    $datosInsumo[]=$insumo;
                }

                return $datosInsumo;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(InsumoModel $insumo)
        {
            $insertar="INSERT INTO insumo (idProveedor,nombre,valor) VALUES (?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $insumo->__GET('idProveedor'),
                    $insumo->__GET('nombre'),
                    $insumo->__GET('valor')
                   
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Buscar($idInsumo)
        {
            $buscar="SELECT * FROM insumo WHERE idInsumo=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idInsumo));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $insumo= new InsumoModel();
                $insumo->__SET('idInsumo', $dato->idInsumo);
                $insumo->__SET('idProveedor', $dato->idProveedor);
                $insumo->__SET('nombre', $dato->nombre);
                $insumo->__SET('valor', $dato->valor);
              
                    

                return $insumo;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(InsumoModel $insumo)
        {
            $actualizar="UPDATE insumo SET idProveedor=?,nombre=?,valor=?
           WHERE idInsumo=?";
            try{
                $this->conexion->prepare($actualizar)->execute(array(
                    $insumo->__GET('idProveedor'),
                    $insumo->__GET('nombre'),
                    $insumo->__GET('valor'),
                    $insumo->__GET('idInsumo')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). " falló");
            }
        }

        public function Eliminar($idInsumo)
        {
            $borrar="DELETE FROM insumo WHERE idInsumo=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idInsumo));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>