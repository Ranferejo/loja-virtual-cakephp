<?php if($user){?>
<nav id="menu-principal" class="container-fluid">
	<ul class="nav nav-tabs">
		<li<?php if($active=='home'){ ?> class="active"<?php } ?>><?php echo $this->Html->link('Home','/admin/');?></li>
		<li class="dropdown<?php if($active=='catalogo'){ ?> active<?php } ?>">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				Catálogo
				<b class="icon-expand-alt"></b>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link('Produtos',array('plugin'=>'catalogo','controller'=>'Produtos','action'=>'index'));?></li>
					<li><?php echo $this->Html->link('Categorias',array('plugin'=>'catalogo','controller'=>'Categorias','action'=>'index'));?></li>
					<li><?php echo $this->Html->link('Fabricantes',array('plugin'=>'catalogo','controller'=>'Fabricantes','action'=>'index'));?></li>
					<li><?php echo $this->Html->link('Fornecedores',array('plugin'=>'catalogo','controller'=>'Fornecedores','action'=>'index'));?></li>
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
<?php };?>