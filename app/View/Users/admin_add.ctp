<?php echo $this->Form->create('User',array('class'=>'form-horizontal')); ?>
<legend>Adicionando novo usuário</legend>
<?php
echo $this->Session->flash();
echo $this->Form->input('nome');
echo $this->Form->input('sobrenome');
echo $this->Form->input('username',array('label'=>'Usuário'));
echo $this->Form->input('email');
echo $this->Form->input('password',array('label'=>'Senha'));
echo $this->Form->input('confirma',array('label'=>'Confirmação de senha','type'=>'password'));
echo $this->Form->end('Criar');