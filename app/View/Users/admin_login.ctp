<?php echo $this->Form->create('User',array('class'=>'form-signin')); ?>
<legend>Acessar administração</legend>
<?php
echo $this->Session->flash();
echo $this->Form->input('username',array('label'=>'Usuário','class'=>'input-block-level'));
echo $this->Form->input('password',array('label'=>'Senha','class'=>'input-block-level'));
echo $this->Form->input('lembrar',array('type'=>'checkbox','label'=>'Lembrar de mim'));
echo $this->Form->button('Entrar',array('type'=>'submit'));?>
 - 
<?php
echo $this->Html->link('Esqueci minha senha',array('controller'=>'Usuarios','action'=>'lembrar'));
echo $this->Form->end();