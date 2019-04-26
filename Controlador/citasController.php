<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/citasModel.php";
    

    class CitasController extends Conexion
    {
        public function Listar()
        {
            $datosCita=array();
            $consulta="SELECT * FROM agendacita ORDER BY idAgendaCita";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $citas= new CitasModel();
                    $citas->__SET('idAgendaCita', $dato->idAgendaCita);
                    $citas->__SET('idTipoCita', $dato->idTipoCita);
                    $citas->__SET('idPersona', $dato->idPersona);
                    $citas->__SET('fecha', $dato->fecha);
                    $citas->__SET('horaFin', $dato->horaFin);
                    $citas->__SET('horaInicio', $dato->horaInicio);
                    $citas->__SET('direccion', $dato->direccion);
                    $citas->__SET('estado', $dato->estado);
                    $datosCita[]=$citas;
                }

                return $datosCita;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

      

        public function Insertar(CitasModel $citas)
        {
            $insertar="INSERT INTO agendacita (idTipoCita,idPersona,fecha,horaFin,horaInicio,direccion,estado) VALUES (?,?,?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $citas->__GET('idTipoCita'),
                    $citas->__GET('idPersona'),
                    $citas->__GET('fecha'),
                    $citas->__GET('horaFin'),
                    $citas->__GET('horaInicio'),
                    $citas->__GET('direccion'),
                    $citas->__GET('estado')
                    
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function ConsulAgenda(){
            $datosCita=array();
            $consulta="SELECT * FROM agendacita ORDER BY idAgendaCita";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $cita= new citasModel();
                    $cita->__SET('idAgendaCita', $dato->idAgendaCita);
                    $cita->__SET('idTipoCita', $dato->idTipoCita);
                    $cita->__SET('idPersona', $dato->idPersona);
                    $cita->__SET('fecha', $dato->fecha);
                    $cita->__SET('horaFin', $dato->horaFin);
                    $cita->__SET('horaInicio', $dato->horaInicio);
                    $cita->__SET('direccion', $dato->direccion);
                    $cita->__SET('estado', $dato->estado);

                    $datosCita[]=$cita;
                }

                return $datosCita;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Buscar($idAgendaCita)
        {
            $buscar="SELECT * FROM agendacita WHERE idAgendaCita=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idAgendaCita));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $citas= new CitasModel();
                    $citas->__SET('idAgendaCita', $dato->idAgendaCita);
                    $citas->__SET('idTipoCita', $dato->idTipoCita);
                    $citas->__SET('idPersona', $dato->idPersona);
                    $citas->__SET('fecha', $dato->fecha);
                    $citas->__SET('horaFin', $dato->horaFin);
                    $citas->__SET('horaInicio', $dato->horaInicio);
                    $citas->__SET('direccion', $dato->direccion);
                    $citas->__SET('estado', $dato->estado);
                    
                    
                return $citas;
                
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(CitasModel $citas)
        {
            $insertar="UPDATE agendacita SET idTipoCita=?,idPersona=?,fecha=?,horaFin=?,
            horaInicio=?,direccion=?,estado=? WHERE idAgendaCita=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $citas->__GET('idTipoCita'),
                    $citas->__GET('idPersona'),
                    $citas->__GET('fecha'),
                    $citas->__GET('horaFin'),
                    $citas->__GET('horaInicio'),
                    $citas->__GET('direccion'),
                    $citas->__GET('estado'),
                    $citas->__GET('idAgendaCita')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function Eliminar($idAgendaCita)
        {
            $borrar="DELETE FROM agendacita WHERE idAgendaCita=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idAgendaCita));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

   


    }
?>