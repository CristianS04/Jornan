<?php
    class PersonaModel
    {
        private $idPersona;
        private $idTipoPersona;
        private $nombre;
        private $apellidos;
        private $correo;
        private $direccion;
        private $estado;
        private $telefono;
        private $password;

        // public function __CONSTRUCT($idPersona, $idTipoPersona, $nombre, $apellido,
        // $correo, $direccion, $estado, $telefono ){
        //     $this->idPersona->$idTipoPersona;
        //     $this->nombre->$nombre;
        //     $this->apellido->$apellido;
        //     $this->correo->$correo;
        //     $this->direccion->$direccion;
        //     $this->estado->$estado;
        //     $this->estado->$estado;
        // }
        

        public function __GET($a)
        {
            return  $this->$a;
        }

        public function __SET($a, $v)
        {
            $this->$a=$v;
        }
    }
?>