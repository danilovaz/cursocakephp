<div class="form-tickets">
	<h2 class="sanja">INSCREVA-SE AQUI</h2>

<?php	 
	 
	 echo $this->Form->create('Inscricao', array('url' => array('controller' => 'inscricoes','action' => 'inscrever')));
	 echo $this->Form->input('Inscricao.nome', array('label' => 'Nome', 'class' => 'labels')); 
	 echo $this->Form->input('Inscricao.sobrenome', array('label' => 'Sobrenome', 'class' => 'labels')); 
	 echo $this->Form->input('Inscricao.nascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18,'type' => 'date')); 
	 echo $this->Form->input('Inscricao.email', array('label' => 'E-mail', 'class' => 'labels')); 
	 echo $this->Form->input('Inscricao.telefone', array('label' => 'Telefone', 'class' => 'labels')); 
	 echo $this->Form->input('Inscricao.celular', array('label' => 'Celular', 'class' => 'labels')); 
	 echo $this->Form->input('Inscricao.endereco', array('label' => 'Endereço', 'class' => 'labels')); 

	 echo $this->Form->submit('INSCREVER'); 
	 echo $this->Form->end();
?>

</div>


