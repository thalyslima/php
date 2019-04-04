<?php
// Marido
class Marido 
{
	// Propriedade
	public $nome;
	public $esposa;
	
	// Configura a propriedade
	function __construct( $nome = null, $esposa = null ) {
		$this->nome   = $nome;
		$this->esposa = $esposa;
	}
}

// Esposa
class Esposa 
{
	// Propriedade
	public $nome;
	
	// Configura a propriedade
	function __construct( $nome = null ) {
		$this->nome = $nome;
	}
}

// Faz as instâncias
$esposa = new Esposa('Maria');
$marido = new Marido('Joãozinho', $esposa );

// Joãozinho e Maria
echo "\n" . $marido->nome . ' e ' . $marido->esposa->nome . "\n";
?>