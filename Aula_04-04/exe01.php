<?php

date_default_timezone_set('America/Sao_Paulo');

class Pessoa {
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
        echo $idadeCalculada . "\n";
        echo date('d') . "\n" . $dia . "\n";
        */

        echo "\n" . 'Data de hoje: ' . date('d/m/Y') . "\n";
        
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

class Livro {
    public $titulo;
    public $autor;
    public $totPaginas;
    public $pagAtual;
    public $aberto;
    public $leitor;
    public $pessoa;

    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }

    public function getLivro() {
        return "Título: {$this->titulo} | Autor: {$this->autor} | Total de Páginas: {$this->totPaginas} | Página Atual: {$this->pagAtual} | Aberto: {$this->aberto} | Leitor: {$this->leitor}" . "\n";
    }

    public function detalhes() {

    }
}

$pessoa = new Pessoa('Thalys', 25, 'M', '12/04/1993' . "\n");
$livro = new Livro('Morte Lenta', '3 Irmãos', 500, 399, '04/02/2019', $pessoa->nome);

$pessoa->fazerAniver();
//$livro->detalhes();

echo 'Dados Completos: ' . "\n";
echo $pessoa->getPessoa(); 

echo 'Livro Cadastrado: ' . "\n";
echo $livro->getLivro(); 