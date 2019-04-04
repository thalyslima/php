<?php
// Cria uma classe que configura o nome da pessoa
class Pessoa
{
	// Uma função que apenas adiciona "Nome: " no valor
	public function configura ( $nome ) {
		// Retorna
		return "Nome: " . $nome;
	}
}

// Cria uma classe para exibir dados
class Exibe
{
	// Configura as propriedades
	// $pessoa será a instância da classe Pessoa
	public $pessoa;
	
	// Este será apenas um nome
	public $nome;
	
	// Configura as propriedades
	function __construct( $nome = null ){
		// Faz a instância da class Pessoa
		$this->pessoa = new Pessoa();
		
		// Configura o valor do nome
		$this->nome = $nome;
	}
	
	public function exibe() {
		// Utiliza um método da classe Pessoa para exibir o nome enviado
		echo $this->pessoa->configura( $this->nome );
	}
}

// Faz a instância da classe Exibe (todo)
$exibe = new Exibe('Luiz Otávio');

// Retorna: 'Nome: Luiz Otávio'
$exibe->exibe();
?>
