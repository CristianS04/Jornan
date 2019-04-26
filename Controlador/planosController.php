<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/planosModel.php";
    

    class PlanosController extends Conexion
    {
        public function Listar()
        {
            $datosPlanos=array();
            $consulta="SELECT * FROM planos ORDER BY idPlano";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $Planos= new PlanosModel();
                    $Planos->__SET('idPlano', $dato->idPlano);
                    $Planos->__SET('idCotizacion', $dato->idCotizacion);
                    $Planos->__SET('fecha', $dato->fecha);
                    $Planos->__SET('img', $dato->img);
                    $Planos->__SET('observaciones', $dato->observaciones);
                    $datosPlanos[]=$Planos;
                }

                return $datosPlanos;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

    
        public function insertar(PlanosModel $Planos)
        {
            
            try {
             $query="INSERT INTO planos (idCotizacion, fecha, img, observaciones) VALUES (:idCotizacion,:fecha,:img,:observaciones)";
     
             $insertar=$this->conexion->prepare($query);
             $idCotizacion=$Planos->__GET('idCotizacion');
             $insertar->bindParam(':idCotizacion',$idCotizacion,PDO::PARAM_STR);
             $fecha=$Planos->__GET('fecha');
             $insertar->bindParam(':fecha',$fecha,PDO::PARAM_STR);
             $img=$Planos->__GET('img');
             $insertar->bindParam(':img',$img,PDO::PARAM_LOB);
             $observaciones=$Planos->__GET('observaciones');
             $insertar->bindParam(':observaciones',$observaciones,PDO::PARAM_INT);
             $insertar->execute();
             return true;
        
        }catch (Exception $e) {
         echo "Error al insertar datos: ".$e->getMessage();
     }}

        public function Buscar($idPlano)
        {
            $buscar="SELECT * FROM planos WHERE idPlano=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idPlano));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $Planos= new PlanosModel();
                   
                    $Planos->__SET('idCotizacion', $dato->idCotizacion);
                    $Planos->__SET('fecha', $dato->fecha);
                    $Planos->__SET('img', $dato->img);
                    $Planos->__SET('observaciones', $dato->observaciones);
                    
                  
                    

                return $Planos;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(PlanosModel $Planos)
        {
            $actualizar="UPDATE planos SET fecha=?,img=?,observaciones=?,
            WHERE idPlano=?";
            try{
                $this->conexion->prepare($actualizar)->execute(array(
                    $Planos->__GET('fecha'),
                    $Planos->__GET('img'),
                    $Planos->__GET('observaciones'),
                    $Planos->__GET('idPlano')
                
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). " falló");
            }
        }

        public function Eliminar($idPlanos)
        {
            $borrar="DELETE FROM planos WHERE idPlano=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idPlano));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>