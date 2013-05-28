<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
		'Session',
		'Cookie',
		'Auth' => array(
			'authenticate'=>array(
				'Blowfish'=>array(
					'scope'=>array('ativo'=>true)
				)
			)
        )
	);
	
	public $helpers = array(
		'Html' => array('className' => 'BootstrapHtml'),
		'Form' => array('className' => 'BootstrapForm'),
		'Paginator' => array('className' => 'BootstrapPaginator'),
		'Cache',
	);
	
	public function beforeFilter(){
		
	}
	
	public function beforeRender(){
		
		//define Temas e Layout para o sistema
		if(isset($this->request->params['prefix'])){
			if($this->request->params['prefix']=='ajax') $this->layout='ajax' ;
		}else{
			$this->theme='default';
		}
		
		//Retorna informações do usuário
		$this->set('user',$this->Auth->user());
		
		//Define a active do menu
		
			//home
		$estatisticas=array('Estatisticas');
		if(in_array($this->request->params['controller'],$estatisticas)){
			$active = 'home';
		}else{
			$active = 'none';
		}
				
		$this->set('active',$active);
		
	}
}
