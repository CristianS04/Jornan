<?php
    class PlanosModel
    {
        private $idPlano;
        private $idCotizacion;
        private $fecha;
        private $img;
        private $observaciones;
     


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