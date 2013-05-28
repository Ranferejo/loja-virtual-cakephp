<legend>Adicionando produto</legend>
<div class="row-fluid">
	<div class="span2">
    	<ul class="nav nav-tabs nav-stacked">
        	<li><?php echo $this->Html->link('<i class="icon-arrow-left"></i> Voltar',array('action'=>'index'),array('escape'=>false));?></li>
        </ul>
    </div>
    <div class="span10">
        <nav>
            <ul class="nav nav-tabs tabs">
                <li class="active"><a href="#geral" data-toggle="tab">Geral *</a></li>
                <li><a href="#preco" data-toggle="tab">Preço *</a></li>
                <li><a href="#seo" data-toggle="tab">SEO</a></li>
                <li><a href="#relacionamentos" data-toggle="tab">Relacionamentos</a></li>
                <li><a href="#envio" data-toggle="tab">Envio *</a></li>
                <li><a href="#personalizar" data-toggle="tab">Personalizar</a></li>
                <li><a href="#arquivos" data-toggle="tab">Arquivos</a></li>
                <li><a href="#fornecedores" data-toggle="tab">Fornecedores e fabricante</a></li>
            </ul>
        </nav>
        
        <?php echo $this->Form->create('Produto',array('class'=>'form-horizontal'));?>
        <div class="tab-content tabsContent">
            <div class="tab-pane fade in active" id="geral">
            	<div class="span6"><?php 
					echo $this->Form->input('nome',array('class'=>'span12','label'=>'Nome *'));
					echo $this->Form->input('etiquetas',array('class'=>'span9'));
					echo $this->Form->input('referencia',array('class'=>'span3','label'=>'Referência'));
					echo $this->Form->input('visibilidade',array(
						'options'=>array(
							'Em todo lugar',
							'Somente catálogo',
							'Somente busca'
						)
					));
					echo $this->Form->input('mostrar',array(
						'options'=>array(
							'Sim'=>'Sim',
							'Não'=>'Não'
						),
						'type'=>'radio',
						'default'=>'Sim'
					));
				 ?></div>
                <div class="span6"><?php
					echo $this->Form->input('tipo',array(
						'options'=>array(
							'Produto simples','Pacote','Produto virtual'
						),
						'type'=>'radio',
						'default'=>'0'
						));
					echo $this->Form->input('condicao',array(
							'options'=>array(
								'Novo'=>'Novo',
								'Usado'=>'Usado'
							),
							'type'=>'radio',
							'default'=>'Novo','label'=>'Condição'
						)
					);
					echo $this->Form->input('destaque',array(
							'options'=>array(
								'Sim'=>'Sim',
								'Não'=>'Não'
							),
							'type'=>'radio',
							'default'=>'Sim'
						)
					);
				?></div>
                <div class="span9">
                <hr />
                	<?php
						echo $this->Form->input('descricaocurta',array('type'=>'textarea','label'=>'Descrição curta'));
						echo $this->Form->input('descricaolonga',array('type'=>'textarea','label'=>'Descrição longa'));
					?>
                </div>
            </div>
            <div class="tab-pane fade" id="preco">
            <?php
                echo $this->Form->input('precobase',array('label'=>'Preço base *'));
			?>
            <hr />
            <h4>Desconto</h4>
            <?php
                echo $this->Form->input('quantidade');
                echo $this->Form->input('precodesconto',array('label'=>'Preço com desconto'));
                echo $this->Form->input('oferta',array(
							'label'=>'Mostrar aviso de oferta',
							'options'=>array(
								'Sim'=>'Sim',
								'Não'=>'Não'
							),
							'type'=>'radio',
							'default'=>'Não'
						));
            ?>
            </div>
            <div class="tab-pane fade" id="seo">
            <?php
				echo $this->Form->input('metatitle',array('label'=>'Meta-titulo','class'=>'span9'));
                echo $this->Form->input('metadescr',array('label'=>'Meta-descrição','class'=>'span9','type'=>'textarea'));
                echo $this->Form->input('metakey',array('label'=>'Palavras-chave','class'=>'span9'));
                echo $this->Form->input('metaurl',array('label'=>'URL'));
            ?>
            </div>
            <div class="tab-pane fade" id="relacionamentos">
            <?php
				echo $this->Form->input('categoriapadrao',array('label'=>'Categoria principal',
				'options'=>array('Cat1','Cat2','Cat3')));
				echo $this->Form->input('categorias',array('options'=>array('Cat1','Cat2','Cat3'),'multiple'=>'multiple'));
                echo $this->Form->input('acessorios',array('label'=>'Acessórios','options'=>array('Cat1','Cat2','Cat3'),'multiple'=>'multiple'));
            ?>
            </div>
            <div class="tab-pane fade" id="envio">
            <div class="span6">
            <?php
				echo $this->Form->input('largura');
                echo $this->Form->input('altura');
                echo $this->Form->input('profundida');
			?>
            </div>
            <div class="span6">
			<?php
                echo $this->Form->input('peso');
                echo $this->Form->input('valorentregafixa',array('label'=>'Valor fixo para entrega'));
            ?>
            </div>
            </div>
            <div class="tab-pane fade" id="personalizar">
                <p>Você não pode adicionar campos personalizados antes de salvar este produto.</p>
            </div>
            <div class="tab-pane fade" id="arquivos">
				<p>Sistema para envio de arquivos que estarão disponíveis após a confirmação do pagamento.</p>
                <p>Exemplo: Manuais de produtos, scripts comprados, e-books...</p>
            </div>
            <div class="tab-pane fade" id="fornecedores">
				<p>Associa fornecedores e fabricantes a este produto.</p>
            </div>
        </div>
<?php	echo $this->Form->end('Salvar');?>
	</div>
</div>