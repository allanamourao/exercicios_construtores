<?php
class ContaBancaria{
    public string $titular;
    public float $saldo;

    // Método construtor
    public function __construct($valor1, $valor){
        $this->titular = $valor1;
        $this->saldo = $valor;
    }
    // Métodos para executar
    public function depositar($valor){
        if ($valor > 0 && $valor <= $this->saldo) {
        $this->saldo = $this->saldo - $valor;
        } else {
        echo "Valor inválido ou saldo insuficiente!<br>";
    }}
    public function sacar($valor){
        if ($valor > 0) {
        $this->saldo = $this->saldo + $valor;
        } else {
        echo "Valor de depósito inválido!<br>";
    }}
    public function exibirSaldo(){
        echo "Titular: " . $this->titular . " - ";
        echo "Saldo Atual: R$" . $this->saldo;
        echo "<br>";
    }
}

$conta1 = new ContaBancaria("Allana Mourão", 600.00);

$conta1->depositar(50);
$conta1->sacar(25);
$conta1->exibirSaldo();
?>