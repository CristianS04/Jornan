<?php
    class PublicacionesModel
    {
        private $idPublicacion;
        private $idPersona;
        private $fecha;
        private $estado;
        private $imagen;
        private $descripcion;


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