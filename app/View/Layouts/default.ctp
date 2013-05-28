<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Destak Store
	</title>
    <meta http-equiv="content-language" content=”pt-br”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('fonts','bootstrap.min','font-awesome.min','dataTables','tema'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
		<header id="header">
        	<div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner container-fluid">
                    <?php echo $this->Html->link('Dest@k Store','/admin/',array('class'=>'brand'));?>
                 	<?php echo $this->element('admin/header');?> 
                </div>
            </div>
            
                <?php echo $this->element('admin/menu');?>
            
		</header>
        	
		<div id="content" class="container-fluid">

			<?php if($user) echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer" class="navbar">
            <div class="navbar-inner container-fluid">
                <?php echo $this->Html->link('Dest@k Store','http://www.erikfigueiredo.com.br/',array('target' => '_blank', 'class'=>'brand text-center'));?>
            </div>
		</footer>
<div id="ajax" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3></h3>
    </div>
    <div class="modal-body">
    	
    </div>
</div>
    <?php echo $this->Html->script(array('jquery','bootstrap.min','dataTables','tema'));?>
    <script type="text/javascript">
		base_url='<?php echo $this->Html->url('/');?>';
	</script>
    <?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
