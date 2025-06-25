<?php 

abstract class computador {
    public $placa_mae = null;
    public $cpu = null;
    public $ssd = null;
    public $memoria_ram = null;
    public $gpu = null;
    public $fonte = null;
    public $gabinete = null;

    function sistema_operacional()
    {echo"sistema";}

    function __get($atributo){
        return $this-> $atributo;
    }

    function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
}

?>