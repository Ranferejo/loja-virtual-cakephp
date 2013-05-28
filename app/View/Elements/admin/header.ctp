<?php if($user){?>
<nav>
    <ul class="nav">
        <li>
            <?php echo $this->Html->link(
			'<b class="icon-user"></b> Meu perfil - Bem vindo '.$user['nome'] . ' ' . $user['sobrenome'],
			array('controller'=>'Users','action'=>'add',$user['id']),
			array('escape'=>false));?></li>
        </li>
    </ul>
</nav>
<nav>
    <ul class="nav pull-right">
        <li>
		<?php echo $this->Html->link(
			'Sair <b class="icon-off"></b>',
			array('controller'=>'Users','action'=>'logout'),
			array('escape'=>false));?></li>
    </ul>
</nav>
<?php };?>