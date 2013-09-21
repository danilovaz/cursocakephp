<div class="form-tickets">
	<h2 class="sanja">INSCREVA-SE AQUI</h2>

	<?php echo $this->Form->create('inscricoes', array('action' => 'inscrever')) ?>
	<?php echo $this->Form->input ('Inscricao.nome', array('label' => 'Nome', 'class' => 'labels')); ?>
	<?php echo $this->Form->input ('Inscricao.sobrenome', array('label' => 'Sobrenome', 'class' => 'labels')); ?>
	<?php echo $this->Form->input ('Inscricao.nascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18,'type' => 'date')); ?>
	<?php echo $this->Form->input ('Inscricao.email', array('label' => 'E-mail', 'class' => 'labels')); ?>
	<?php echo $this->Form->input ('Inscricao.telefone', array('label' => 'Telefone', 'class' => 'labels')); ?>
	<?php echo $this->Form->input ('Inscricao.celular', array('label' => 'Celular', 'class' => 'labels')); ?>
	<?php echo $this->Form->input ('Inscricao.endereco', array('label' => 'Endereço', 'class' => 'labels')); ?>

	<?php echo $this->Form->submit ('INSCREVER'); ?>
	<?php echo $this->Form->end() ?>

</div>