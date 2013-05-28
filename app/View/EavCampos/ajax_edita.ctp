<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
			<?php
            
                echo $this->Form->create('EavCampo',array('class'=>'form-horizontal form-ajax'));
                echo $this->Form->input('titulo');
                echo $this->Form->input('type',array(
                    'options'=>array(
                        'text'=>'Texto de 1 linha',
                        'textarea'=>'Texto de multiplas linhas',
                        'email'=>'Campo de email',
                        'color'=>'Seleção de cor',
                        'file'=>'Envio de arquivo',
                        'select'=>'Campo para escolher 1 opção',
                        'checkbox'=>'Campo para escolhar várias opções',
                    ),
                    'label'=>'Tipo'
                ));
			?>
            <hr />
            <div class="campo-container">
                <div class="campo-lista">
                </div>
				<?php
                    echo $this->Html->link('Adicionar','#',array('class'=>'btn btn-success campo-add'));
                ?>
            </div>
			<?php
                echo $this->Form->hidden('model',array('value'=>$model));
                echo $this->Form->hidden('foreign_id',array('value'=>$foreign_id));
                echo $this->Form->end('Salvar');
            ?>
        </div>
    </div>
</div>