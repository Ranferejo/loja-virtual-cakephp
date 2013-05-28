<?php

class EavBehavior extends ModelBehavior {
	
	//uma função que pega o id da consulta
	public function pegaEav(Model $Model, $resultados){
		$res=array();
		//em cada resultado do array
		foreach($resultados as $key => $value):
			//verifico se ele é um array
			if(is_array($value)){
				//se for eu executo a função novamente
				$res[$key]=$Model->pegaEav($value);
				
			//se não
			}else{
				//verifico se é a coluna do id
				if($key == 'id'){
					
					//executo um find aqui para encontrar os dados no eav
					App::uses('EavCampo', 'Model');
					$Eav=new EavCampo();
					$res=$Eav->find('all',array(
							'conditions'=>array(
								'EavCampo.model'=>$Model->alias,
								'EavCampo.foreign_id'=>$value
							),
							'fields'=>array(
								'EavCampo.id','EavCampo.titulo','EavCampo.type'
							)
						)
					);
					//adiciono o id ao array
					$res['id']=$value;
					
					//Troco o valor do array de EavCampo para apenas Eav (economziar código)
					$res['Eav']=$value['EavCampo'];
				}
				//Se não for a coluna id
				else{
					//armazeno o valor no array
					$res[$key]=$value;
				}
			}
		endforeach;
		
		//retorno o valor
		return $res;
	}
	
	public function afterFind(Model $Model, $resultados, $primary){
		$resultados=$this->pegaEav($Model,$resultados);
		return $resultados;
	}
}