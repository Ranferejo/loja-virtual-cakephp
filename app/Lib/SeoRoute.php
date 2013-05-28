<?php

//App::uses('Seo', 'Model');

class SeoRoute extends CakeRoute
{
	protected $controllers = array(
		'controller1',
		'controller2',
		'controller3',
	);
	
	public function parse($url){
		if ($url==null)$url='/home';
		//crio um array com a url
		$parts=explode('/',$url);
		//removo o $url para usar novamente depois
		unset($url);
		
		//se for algum controller que eu vou usar
		if(in_array($parts[1],$this->controllers)){
			//seto os parametros dele
			$url['controller']=$parts[1];
			$url['action']='index';
			
			//se não eu indico meu controller e action que exibirão a página
		}else{
			$url['controller']='Pages';
			$url['action']='display';
			$url['slug']=$parts[1];
		}
		return $url;
	}
}