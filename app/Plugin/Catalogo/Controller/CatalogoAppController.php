<?php
class CatalogoAppController extends AppController {
	
	public function beforeRender(){
		parent::beforeRender();
		$this->set('active','catalogo');
	}
	
}