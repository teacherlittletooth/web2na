<?php

namespace Model;

class Pedido
{
    //Atributos
    private $codPedido;
    public $dataHora;
    public $itens;
    public $quantidade;
    public $pagamento;
    public $localEntrega;

    //Métodos
    public function __construct()
    {
        //Esse método será invocado
        //toda vez que esta classe for
        //instanciada!
        echo "<br>Código do pedido: " . $this->gerarCodigo();
        $this->gerarData();
    }

    private function gerarData()
    {
        date_default_timezone_set("America/Sao_Paulo");
        $this->dataHora = date('Y-m-d H:i:s');
        echo "<br>Data e hora do pedido:<br>";
        echo date("d/m/Y") . "<br>" . date("H:i:s");
    }

    private function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300); //set
        return $this->codPedido; //get
    }

    public function gerarDesconto()
    {
        if( $this->localEntrega == "Viamão"
            && $this->quantidade >= 4 ||
            $this->localEntrega == "Alvorada"
            && $this->quantidade >= 4 ) {
                return "<h1 style =
                            'background-color: green;
                            color: white'> 10% Off </h1>";
            }
    }
}