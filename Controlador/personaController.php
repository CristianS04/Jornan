<?php
    session_start();
    require "../../../Modelo/configuracion.php";
    require "../../../Modelo/personaModel.php";
    
   
    class PersonaController extends Conexion
    {
        public function validar(){
           
            if (isset($_POST['user']) && isset($_POST['pass'])){
               $usuario = $_POST['user'];
               $clave = $_POST['pass'];

               $pagina = "";
    
              $hash= sha1($clave); 
               try{
                   //consulta
                   $stmt = $this->conexion->prepare("SELECT * FROM persona where correo='$usuario' AND password='$hash'" ); 
                   $stmt->execute();
                   //mostramos datos
                   while( $datos = $stmt->fetch() ){
                    $_SESSION['nombreusu']=$datos[1];   }
                       // miramos si trajo registro y cuantos (si el usuario existe)
                   $count=$stmt->rowCount();
                   if($count){
                       // consultamos el tipo
                       $result = $this->conexion->prepare("SELECT idTipoPersona FROM persona WHERE correo='$usuario' AND password='$hash'"); 
                       $result->execute();
                       //almacenamos el tipo en una variable y en una variable de session
                       while( $datos = $result->fetch()){
                       $tipo=$datos[0].'<br/>';}
                       //session_start();
                       $_SESSION['usuario']=$tipo;
                       if ($tipo==1){
                        $pagina = "../usuario/registrar.usuario.php";
                    
                       }elseif($tipo==2){
                           $pagina = "../../Usuario/CitasU/registrar.citaU.php";
                       }else{echo'error';}
                   
                   }else{
                    echo '<script>confirm("Error autenficicación")</script>;';
                   } 
                   $conn=null;
               }
               catch(PDOException $e) {
                   echo "Error: ".$e->getMessage();
               }
               header("location: ".$pagina);
               return;
       } 

            
        }

        public function Listar()
        {
            $datosPersona=array();
            $consulta="SELECT * FROM persona ORDER BY idPersona";
            try{
                $resultado=$this->conexion->query($consulta);
                //$resultado->execute();

                foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $dato) {
                    $usuario= new PersonaModel();
                    $usuario->__SET('idPersona', $dato->idPersona);
                    $usuario->__SET('nombre', $dato->nombres);
                    $usuario->__SET('apellidos', $dato->apellidos);
                    $usuario->__SET('correo', $dato->correo);
                    $usuario->__SET('estado', $dato->estado);
                    $datosPersona[]=$usuario;
                }

                return $datosPersona;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Insertar(PersonaModel $usuario)
        {
            
            $documento= $usuario->idPersona;
            $con = $this->conexion;
            $listar="SELECT COUNT(*) AS total FROM persona WHERE idPersona='$documento'";
            $sql= mysqli_query($con,$listar);
            $row=mysqli_fetch_object($sql);
            if($row->total == 0){
            $insertar="INSERT INTO persona (idPersona,idTipoPersona,nombres,apellidos,correo,direccion,estado,telefono,password) VALUES (?,?,?,?,?,?,?,?,?)";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $usuario->__GET('idPersona'),
                    $usuario->__GET('idTipoPersona'),
                    $usuario->__GET('nombre'),
                    $usuario->__GET('apellidos'),
                    $usuario->__GET('correo'),
                    $usuario->__GET('direccion'),
                    $usuario->__GET('estado'),
                    $usuario->__GET('telefono'),
                    $usuario->__GET('password')
                ));
                    return true;
            }catch (Exception $e){
                die($e->getMessage());
            }
        }else{
            $r= "<script>alert('Ya existe un usuario con ese documento')</script>"; 
            return $r;
        }
    
        }

        public function emailExiste(PersonaModel $correo){
            $stmt= $this->conexion->prepare("SELECT idPersona FROM persona WHERE correo=? LIMIT 1");
            $stmt->bind_param("s",$correo);
            $stmt->execute();
            $stmt->store_result();
            $num= $stmt->num_rows;
            $stmt->close();

            if ($num > 0){
                return true;
            }  else {
                return false;
            }
        }

        public function Buscar($idPersona)
        {
            $buscar="SELECT * FROM persona WHERE idPersona=?";
            try{
                $resultado=$this->conexion->prepare($buscar);
                $resultado->execute(array($idPersona));

                $dato=$resultado->fetch(PDO::FETCH_OBJ);
                $usuario= new PersonaModel();
                    $usuario->__SET('idPersona', $dato->idPersona);
                    $usuario->__SET('idTipoPersona', $dato->idTipoPersona);
                    $usuario->__SET('nombre', $dato->nombres);
                    $usuario->__SET('apellidos', $dato->apellidos);
                    $usuario->__SET('correo', $dato->correo);
                    $usuario->__SET('direccion', $dato->direccion);
                    $usuario->__SET('estado', $dato->estado);
                    $usuario->__SET('telefono', $dato->telefono);
                    $usuario->__SET('password', $dato->password);

                return $usuario;

            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(PersonaModel $usuario)
        {
            $insertar="UPDATE persona SET idTipoPersona=?,nombres=?,apellidos=?,correo=?,
            direccion=?,estado=?,telefono=?,password=? WHERE idPersona=?";
            try{
                $this->conexion->prepare($insertar)->execute(array(
                    $usuario->__GET('idTipoPersona'),
                    $usuario->__GET('nombre'),
                    $usuario->__GET('apellidos'),
                    $usuario->__GET('correo'),
                    $usuario->__GET('direccion'),
                    $usuario->__GET('estado'),
                    $usuario->__GET('telefono'),
                    $usuario->__GET('password'),
                    $usuario->__GET('idPersona')
                ));
                return true;
            }catch (Exception $e){
               //  die("Connection failed: " . $e);
                  die($e->getMessage(). "falló");
            }
        }

        public function Eliminar($idPersona)
        {
            $borrar="DELETE FROM persona WHERE idPersona=?";
            try{
                $this->conexion->prepare($borrar)->execute(array($idPersona));
                return true;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>