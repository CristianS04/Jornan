<?php
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/publicacionesModel.php";
    class PublicacionesController extends Conexion
    {
        public function Listar()
        {
            $datosPublicacion=array();
            $consulta="SELECT * FROM publicaciones ORDER BY idPublicacion";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $publicacion= new PublicacionesModel();
                    $publicacion->__SET('idPublicacion', $dato->idPublicacion);
                    $publicacion->__SET('idPersona', $dato->idPersona);
                    $publicacion->__SET('fecha', $dato->fecha);
                    $publicacion->__SET('estado', $dato->estado);
                    $publicacion->__SET('imagen', $dato->imagen);
                    $publicacion->__SET('descripcion', $dato->descripcion);
                    $datosPublicacion[]=$publicacion;
                }

                return $datosPublicacion;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Insertar(PublicacionesModel $publicacion)
        {
            $insertar="INSERT INTO publicaciones (idPersona, fecha, estado, imagen, descripcion) VALUES (?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $publicacion->__GET('idPersona'),
                    $publicacion->__GET('fecha'),
                    $publicacion->__GET('estado'),
                    $publicacion->__GET('imagen'),
                    $publicacion->__GET('descripcion')));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Buscar($idPublicacion)
        {
            $buscar="SELECT * FROM publicaciones WHERE idPublicacion=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idPublicacion));

                    $dato=$resultado->fetch(PDO::FETCH_OBJ);
                    $publicacion = new PublicacionesModel;
                    $publicacion->__SET('idPublicacion', $dato->idPublicacion);
                    $publicacion->__SET('idPersona', $dato->idPersona);
                    $publicacion->__SET('fecha', $dato->fecha);
                    $publicacion->__SET('estado', $dato->estado);
                    $publicacion->__SET('imagen', $dato->imagen);
                    $publicacion->__SET('descripcion', $dato->descripcion);

                return $publicacion;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(PublicacionesModel $publicaciones)
        {
            $insertar="UPDATE publicaciones SET idPersona=?, fecha=?, estado=?, imagen=?, descripcion=? WHERE idPublicacion=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $publicaciones->__GET('idPersona'),
                    $publicaciones->__GET('fecha'),
                    $publicaciones->__GET('estado'),
                    $publicaciones->__GET('imagen'),
                    $publicaciones->__GET('descripcion'),
                    $publicaciones->__GET('idPublicacion')

                ));
                return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Eliminar($idPublicacion)
        {
            $borrar="DELETE FROM publicaciones WHERE idPublicacion=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idPublicacion));
                return true;
            }catch(Exceptio $e){
                die($e->getMessage());
            }
        }
    }
?>