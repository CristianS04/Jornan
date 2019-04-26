<?php

class abonoModel  
{
    private $idAbono;
    private $fecha;
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