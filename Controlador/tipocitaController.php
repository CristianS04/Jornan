<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/tipocitaModel.php";
    

    class TipocitaController extends Conexion
    {



public function ConsulTipo(){
            $datosCita=array();
            $consulta="SELECT * FROM tipocita ORDER BY idTipoCita";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $tipocita= new TipocitaModel();
                    $tipocita->__SET('idTipoCita', $dato->idTipoCita);
                    $tipocita->__SET('nombre', $dato->nombre);

                    $datosCita[]=$tipocita;
                }

                return $datosCita;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        
    }
    ?>