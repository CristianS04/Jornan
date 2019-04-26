<?php
    class InsumoModel
    {
        private $idInsumo;
        private $idProveedor;
        private $nombre;
        private $valor;
    

        

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