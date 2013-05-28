<table class="table-ajax table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($Campos as $key =>$value){
        $value = $value['EavCampo'];
    ?>
    	<tr>
    		<td><?php echo $value['id'];?></td>
            <td><?php echo $value['titulo'];?></td>
            <td><?php echo $value['type'];?></td>
            <td>
				<?php echo $this->Html->link('Editar',array(
					'controller'=>'EavCampos','action'=>'edita',$value['id'],$value['model'],$value['foreign_id']),
					array('escape'=>false,'class'=>'btn link-ajax')
				);?>
                <?php echo $this->Html->link('Apagar',array(
					'controller'=>'EavCampos','action'=>'remove',$value['id'],$value['model'],$value['foreign_id']),
					array('escape'=>false,'class'=>'btn link-ajax')
				);?>
            </td>
       </tr>
	<?php }?>
    </tbody>
    <tfoot>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </tfoot>
</table>
<?php echo $this->Html->link('Novo campo',array(
	'controller'=>'EavCampos','action'=>'add',$model,$foreign_id),
	array('escape'=>false,'class'=>'btn link-ajax','title'=>'')
);?>