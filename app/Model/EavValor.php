<?php

class EavValor extends AppModel {
	public $name = 'EavValor';
	public $validate = array(
        'valor' => array(
			'required' => true,
			'message'  => 'Campo obrigatório! Não pode ficar em branco!'
        )
    );
}