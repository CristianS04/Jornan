<?php
    class OrdenModel
    {
        private $idOrdenProduccion;
        private $idCotizacion;
        private $fechaInicio;
        private $fechaFinal;
        private $estado;

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