<?php

	class Pai {
		private $nome = 'Jorge'; 
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';


		public function getNome() {
			return $this->nome;
		}
	}

	$pai = new pai();
	echo $pai->sobrenome;
	/*
	$pai->humor = 'Triste';
	echo '<br />';
	echo $pai->humor; 
	*/
?>