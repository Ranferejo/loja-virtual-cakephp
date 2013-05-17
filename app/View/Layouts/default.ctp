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
        	<div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner container-fluid">
                    <?php echo $this->Html->link('Loja virtual','/',array('class'=>'brand'));?>
                    <nav>
                        <ul class="nav">
                            <li><a href="#" ><b class="icon-user"></b> Meu perfil</a></li>
                            <li><a href="#" > - Bem vindo Erik Figueiredo</a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="nav pull-right">
                            <li><a href="#" >Sair <b class="icon-off"></b></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <nav id="menu-principal" class="container-fluid">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Catálogo
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Produtos</a></li>
                                <li><a href="#">Categorias</a></li>
                                <li><a href="#">Fabricantes</a></li>
                                <li><a href="#">Fornecedores</a></li>
                            </ul>
                        </a>
                    </li>
                    <li><a href="#">Páginas</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Compras
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Compras</a></li>
                                <li><a href="#">Faturas</a></li>
                                <li><a href="#">Devolução</a></li>
                                <li><a href="#">Créditos</a></li>
                                <li><a href="#">Relatórios</a></li>
                                <li><a href="#">Mensagens</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Envio
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Envios</a></li>
                                <li><a href="#">Transportadoras</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Clientes
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Clientes</a></li>
                                <li><a href="#">Endereços</a></li>
                                <li><a href="#">Grupos</a></li>
                                <li><a href="#">Carrinhos de compra</a></li>
                                <li><a href="#">Atendimento ao cliente</a></li>
                                <li><a href="#">Contatos</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Descontos
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cupom</a></li>
                                <li><a href="#">Carrinho</a></li>
                                <li><a href="#">Catálogo</a></li>
                                <li><a href="#">Cliente</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Configurar
                            <b class="icon-expand-alt"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">...</a></li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Estatísticas
                        </a>
                    </li>
                </ul>
            </nav>
		</header>
        	
		<div id="content" class="container-fluid">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer" class="navbar navbar-fixed-bottom">
            <div class="navbar-inner container-fluid">
                <?php echo $this->Html->link('Loja virtual - Criar um nome','http://www.erikfigueiredo.com.br/',array('target' => '_blank', 'class'=>'brand text-center'));?>
            </div>
		</footer>
    <?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
