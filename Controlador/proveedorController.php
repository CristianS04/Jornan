<?php
    
    include_once "../../../Modelo/configuracion.php";
    include_once "../../../Modelo/proveedorModel.php";
    

    class ProveedorController extends Conexion
    {
        public function Listar()
        {
            $datosPersona=array();
            $consulta="SELECT * FROM proveedores ORDER BY idProveedor";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $Proveedor= new ProveedorModel();
                    $Proveedor->__SET('idProveedor', $dato->idProveedor);
                    $Proveedor->__SET('nombre', $dato->nombre);
                    $Proveedor->__SET('razonSocial', $dato->razonSocial);
                    $Proveedor->__SET('telefono', $dato->telefono);
                    $Proveedor->__SET('fax', $dato->fax);
                    $Proveedor->__SET('direccion', $dato->direccion);
                    $Proveedor->__SET('representanteLegal', $dato->representanteLegal);
                    $Proveedor->__SET('telefonoRepresentante', $dato->telefonoRepresentante);
                    $datosProveedor[]=$Proveedor;
                }

                return $datosProveedor;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(ProveedorModel $proveedor)
        {
            $insertar="INSERT INTO proveedores (idProveedor,nombre,razonSocial,nit,telefono,fax,direccion,representanteLegal,telefonoRepresentante) VALUES (?,?,?,?,?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $proveedor->__GET('idProveedor'),
                    $proveedor->__GET('nombre'),
                    $proveedor->__GET('razonSocial'),
                    $proveedor->__GET('nit'),
                    $proveedor->__GET('telefono'),
                    $proveedor->__GET('fax'),
                    $proveedor->__GET('direccion'),
                    $proveedor->__GET('representanteLegal'),
                    $proveedor->__GET('telefonoRepresentante'),
                   
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }
        public function ConsulProv(){
            $datosCita=array();
            $consulta="SELECT * FROM proveedores ORDER BY idProveedor";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $tipocita= new ProveedorModel();
                    $tipocita->__SET('idProveedor', $dato->idProveedor);
                    $tipocita->__SET('nombre', $dato->nombre);
                    $tipocita->__SET('razonSocial', $dato->razonSocial);
                    $tipocita->__SET('nit', $dato->nit);
                    $tipocita->__SET('telefono', $dato->nombre);
                    $tipocita->__SET('fax', $dato->fax);
                    $tipocita->__SET('direccion', $dato->direccion);
                    $tipocita->__SET('representanteLegal', $dato->representanteLegal);
                    $tipocita->__SET('telefonoRepresentante', $dato->telefonoRepresentante);

                    $datosCita[]=$tipocita;
                }

                return $datosCita;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Buscar($idProveedor)
        {
            $buscar="SELECT * FROM proveedores WHERE idProveedor=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idProveedor));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $proveedor= new ProveedorModel();
                    $proveedor->__SET('idProveedor', $dato->idProveedor);
                    $proveedor->__SET('nombre', $dato->nombre);
                    $proveedor->__SET('razonSocial', $dato->razonSocial);
                    $proveedor->__SET('nit', $dato->nit);
                    $proveedor->__SET('telefono', $dato->telefono);
                    $proveedor->__SET('fax', $dato->fax);
                    $proveedor->__SET('direccion', $dato->direccion);
                    $proveedor->__SET('representanteLegal', $dato->representanteLegal);
                    $proveedor->__SET('telefonoRepresentante', $dato->telefonoRepresentante);
                    

                return $proveedor;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(ProveedorModel $proveedor)
        {
            $actualizar="UPDATE proveedores SET nombre=?,razonSocial=?,nit=?,
            telefono=?,fax=?,direccion=?,representanteLegal=?,telefonoRepresentante=? WHERE idProveedor=?";
            try{
                $this->conexion->prepare($actualizar)->execute(array(
                    $proveedor->__GET('nombre'),
                    $proveedor->__GET('razonSocial'),
                    $proveedor->__GET('nit'),
                    $proveedor->__GET('telefono'),
                    $proveedor->__GET('fax'),
                    $proveedor->__GET('direccion'),
                    $proveedor->__GET('representanteLegal'),
                    $proveedor->__GET('telefonoRepresentante'),
                    $proveedor->__GET('idProveedor')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). " falló");
            }
        }

        public function Eliminar($idProveedor)
        {
            $borrar="DELETE FROM proveedores WHERE idProveedor=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idProveedor));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>