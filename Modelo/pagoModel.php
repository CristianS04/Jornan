<?php

class pagoModel  
{
    private $idPago;
    private $idCotizacion;
    private $dirDom;
    private $recDom;
    private $monto;
    private $estado;

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