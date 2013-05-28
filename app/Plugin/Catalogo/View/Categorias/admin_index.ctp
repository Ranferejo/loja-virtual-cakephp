<legend>Categorias</legend>
<div class="row-fluid">
	<div class="span2">
    	<ul class="nav nav-tabs nav-stacked">
        	<li><?php echo $this->Html->link('<i class="icon-plus-sign-alt"></i> Novo',array('action'=>'add'),array('escape'=>false));?></li>
            <li><?php echo $this->Html->link('<i class="icon-cloud-download"></i> Exportar',array('action'=>'exportar'),array('escape'=>false));?></li>
            <li><?php echo $this->Html->link('<i class="icon-cloud-upload"></i> Importar',array('action'=>'importar'),array('escape'=>false));?></li>
        </ul>
    </div>
    <div class="span10">
        <table class="table-ajax table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Posição</th>
                    <th>Mostrar</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Posição</th>
                    <th>Mostrar</th>
                    <th>Ações</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>