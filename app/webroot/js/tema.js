// JavaScript Document
$(function(){
	
	baseLayout();
	onAjaxNavigate();
	
	//EAV

	if($('.eav-button').length>0){
		$('.eav-button').addClass('btn btn-success');
		$('.eav-button').text('Gerenciar campos personalizados');
		$('.eav-button').parent().parent().children('label').text('');
		$('.eav-button').click(function(){
			loadAjax(base_url+'ajax/EavCampos/index/'+$(this).data('model')+'/'+$(this).data('id'),'Campo Personalizado',$(this));
			baseLayout();
			return false;
		});
	}
	
	function onAjaxNavigate(){
		$('body').on('submit','.form-ajax',function(){
			formAjax($(this).attr('action'),$(this).attr('title'),$(this));
			return false;
		});
		$('body').on('click','.link-ajax',function(){
			loadAjax($(this).attr('href'),$(this).attr('title'),$(this));
			return false;
		});
	}
	
	function formAjax(url,titulo,elemento){
		titulo = typeof titulo !== 'undefined' ? titulo : false;
		$.ajax({
			url:url,
			dataType:'html',
			data:elemento.serialize(),
			type:'post',
			success: function(e){
				if(titulo)$('#ajax .modal-header h3').text(titulo);
				$('#ajax .modal-body').html(e);
				$('#ajax').modal('show');
				checkValorEavCampos();
			}
		});
	}
	
	function loadAjax(url,titulo,elemento){
		titulo = typeof titulo !== 'undefined' ? titulo : false;
		elemento = typeof elemento !== 'undefined' ? elemento : false;
		if(elemento){
			conteudo = elemento.html();
			elemento.html('Carregando, aguarde!');
		}
		$.ajax({
			url:url,
			dataType:'html',
			success: function(e){
				if(titulo)$('#ajax .modal-header h3').text(titulo);
				$('#ajax .modal-body').html(e);
				$('#ajax').modal('show');
				if(elemento)elemento.html(conteudo);
				checkValorEavCampos();
			}
		});
	}
	
	function baseLayout(){
		if($('.table-ajax').length>0){
			$('.table-ajax').dataTable();
		}
		
		if($('.tabs').length>0){
			$('.tabs a').click(function(e){
				e.preventDefault();
				$(this).tab('show');
			});
		}
	}

	total = $('.campo-valores').length;
	total++;
	$('body').on('click','.campo-add',function(){
		total++;
		$('.campo-lista').append('<div class="control-group"><label for="EavValor'+total+'Valor" class="control-label">Opção do campo</label><div class="controls"><input name="data[EavValor]['+total+'][valor]" class="campo-valores" type="text" id="EavValor'+total+'Valor"> <a href="#" class="btn btn-danger btn-small campo-remove"><i class="icon-remove"></i></a></div></div>');
		return false;
	});
	$('body').on('click','.campo-remove',function(){
		var este = $(this).parent().parent();
		este.hide('slow',function(){
			este.remove();
		});
		return false;
	});
	
	getValorEavCampos();
	
	function getValorEavCampos(){
		$('body').on('change','#EavCampoType',function(){
			MostraEavCampos($(this).val());
		});
	}
	
	function checkValorEavCampos(){
		if($('#EavCampoType').length>0){
			MostraEavCampos($('#EavCampoType').val());
		}
	}
	
	function MostraEavCampos(valor){
		if((valor=='select') || (valor=='checkbox')){
			$('.campo-container').show('slow');
		}else{
			$('.campo-container').hide('slow');
		}
	}
	
});