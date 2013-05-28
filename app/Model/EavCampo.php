<?php

class EavCampo extends AppModel {
	public $name = 'EavCampo';
	public $hasMany = array('EavValor'=>array(
		'dependent'=>true
	));
	public $validate = array(
        'titulo' => array(
			'required' => true,
			'message'  => 'Campo obrigatório! Não pode ficar em branco!'
        ),
        'type' => array(
            'required' => true,
            'message' => 'Campo obrigatório! Não pode ficar em branco!'
        )
    );
	
	public function beforeSave($options = array()){
		if($this->data['EavCampo']['type']!='select'||$this->data['EavCampo']['type']!='checkbox'){
			if(isset($this->data['EavValor'])) unset($this->data['EavValor']);
		}
	}
	
}