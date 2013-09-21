<?php

	class Inscricao extends AppModel {

		//defino para qual tabela o model deve apontar
		public $useTable = 'inscricoes';

		//crio o campo virtual para Nome + Sobrenome
		public $virtualFields = array('nome_completo' => 'CONCAT(Inscricao.nome, " ", Insricao.sobrenome)');

		//defino a chave primária da tabela como inscricao_id
		public $primaryKey = 'inscricao_id';
	}

?>

