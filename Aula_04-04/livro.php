<?php

class Livro implements Pessoa {
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

    public function detalhes(){

    }
}

$livro = new Livro('Morte Lenta', '3 Irmãos', 500, 399, '04/02/2019', $pessoa->nome);

echo 'Livro Cadastrado: ' . "\n";
echo $livro->getLivro(); 

?>