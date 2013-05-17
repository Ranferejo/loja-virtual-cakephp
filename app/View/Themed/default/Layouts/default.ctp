<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <meta http-equiv="content-language" content=”pt-br”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('fonts','bootstrap.min','font-awesome.min','tema'));
		echo $this->Html->script(array('http://code.jquery.com/jquery.js','bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
		<header id="header">
        	<div class="navbar navbar-fixed-top">
                <div class="navbar-inner container-fluid">
                    <?php echo $this->Html->link('Tema padrão','/',array('class'=>'brand'));?>
                </div>
            </div>
		</header>
        	
		<div id="content" class="container-fluid">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer" class="navbar navbar-fixed-bottom">
            <div class="navbar-inner container-fluid">
                <?php echo $this->Html->link('Erik Figueiredo','http://www.erikfigueiredo.com.br/',array('target' => '_blank', 'class'=>'brand text-center'));?>
            </div>
		</footer>
    <?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
