<?php

date_default_timezone_set('America/Sao_Paulo');

class Pessoa extends Livro {
    public $nome;
    public $idade;
    public $sexo;
    public $dataNasc;

    public function __construct($nome, $idade, $sexo, $dataNasc) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->dataNasc = $dataNasc;
    }

    public function getPessoa() {
        return "Nome: {$this->nome} | Idade: {$this->idade} | Sexo: {$this->sexo} | Data de Nascimento: {$this->dataNasc}" . "\n";
    }

    public function fazerAniver() {    
        // Separa em dia, mês e ano
        list($dia, $mes, $ano) = explode('/', $this->dataNasc);

        // Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

        // Descobre a unix timestamp da data de nascimento
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        // Cáculo da idade com timestamp
        $idadeCalculada = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        /*        
        print $idadeCalculada . "\n";
        print date('d') . "\n" . $dia . "\n";
        */

        print "\n" . 'Data de hoje: ' . date('d/m/Y') . "\n";
        
        if ((date('d') == $dia)) {
            echo "\n" . 'Hoje é aniversário de ' . $this->nome .', parabéns!' . "\n" . "\n";
            $this->idade++;
        } elseif ($idadeCalculada > $this->idade) {
            echo "\n" . $this->nome . ' fez aniversário dia ' . $dia . '/' . $mes . "\n" . "\n";
            $this->idade++;
        } else {
            echo "\n" . $this->nome . ' fará aniversário dia ' . $dia . '/' . $mes . "\n" . "\n";
        }
    }
}

$pessoa = new Pessoa('Thalys', 25,'M', '04/04/1993');
$pessoa->fazerAniver($date = date('d/m/Y'));

echo 'Dados Completos: ' . "\n";
echo $pessoa->getPessoa(); 