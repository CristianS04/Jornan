<?php
    class ProveedorModel
    {
        private $idProveedor;
        private $nombre;
        private $razonSocial;
        private $nit;
        private $telefono;
        private $fax;
        private $direccion;
        private $representanteLegal;
        private $telefonoRepresentante;
        
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