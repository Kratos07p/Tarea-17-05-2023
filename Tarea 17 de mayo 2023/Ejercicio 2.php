<?php
class Bascula
{
    public $toledo = 1.40;
    public $danny = 1.50;
    public $indio = 2.40;
    public $selloDeOro = 2.30;
    public $res = 4.75;
    public $cerdo = 2.58;
}

class Pesaje extends Bascula
{
    public $peso;
    public $codigoProveedor;

    public function __construct($peso, $codigoProveedor)
    {
        $this->peso = $peso;
        $this->codigoProveedor = $codigoProveedor;
    }

    public function getPrecio()
    {
        switch ($this->codigoProveedor) {
            case '101010':
                return $this->peso * $this->toledo;
                break;
            case '202020':
                return $this->peso * $this->danny;
                break;
            case '303030':
                return $this->peso * $this->indio;
                break;
            case '404040':
                return $this->peso * $this->selloDeOro;
                break;
            case '505050':
                return $this->peso * $this->res;
                break;
            case '606060':
                return $this->peso * $this->cerdo;
                break;
            default:
                return 0;
        }
    }
}

$pagar = new Pesaje(7, '606060');
echo $pagar->getPrecio();
?>
