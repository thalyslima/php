<?php 
abstract class Conta {
    CONST BREAK_LINE = "\n";

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes() {
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}"
            . self::BREAK_LINE . self::BREAK_LINE ;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo self::BREAK_LINE
            . " Depósito de: {$valor} | Saldo atual: {$this->saldo}"
            . self::BREAK_LINE . self::BREAK_LINE;
    }
}

class Poupanca extends Conta {
    public function saque($valor) {
        if($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}" . self::BREAK_LINE;
        }
        else {
            echo "Saque não autorizado de {$valor} | Saldo atual: {$this->saldo}" . self::BREAK_LINE;
        }
    }
}

class Corrente extends Conta {
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function saque($valor) {
        if($this->saldo + $this->limite >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}"
                . self::BREAK_LINE;
        }
        else {
            echo "Saque não autorizado de {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite}"
                . self::BREAK_LINE;
        }
    }
}

$c1 = new Corrente(100, 2586, 5000, 3000);
$c1->depositar(1800);
$c1->saque(2500);
$c1->saque(8500);

echo $c1->getDetalhes();