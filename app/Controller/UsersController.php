<?php
App::uses('Security', 'Utility');
class UsersController extends AppController {
	
	public function admin_login(){
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Auth->login()) {
				//adiciona 1 acesso
				$this->User->id=$this->Auth->user('id');
				$this->User->set('acessos',$this->Auth->user('acessos')+1);
				$this->User->save();
				
				//seta o cookie
				if($this->request->data['User']['lembrar']==1){
					$user=$this->User->read();
					$user=$user['User'];
					$user=array(
							'id'=>$user['id'],
							'user'=>$user['username'],
							'pass'=>$user['password']
					);

					$this->Cookie->write('lembrar', $user, true, '2 weeks');
				}
				
				$this->Session->setFlash(__('Logado com sucesso!'), 'sucesso');
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('Usuário ou senha não encontrados, tente novamente ou verifique se sua conta está ativada!'), 'erro');
			}
		}else{
			if($this->Cookie->check('lembrar')){
				$cookie=$this->Cookie->read('lembrar');
				$this->User->id=$cookie['id'];
				$user=$this->User->read();
				$user=$user['User'];
				if($user['username']==$cookie['user']&&$user['password']==$cookie['pass']){
					unset($user['password']);
					if($this->Auth->login($user)){
						return $this->redirect($this->Auth->redirectUrl());
					}
				}
			}
		}
	}
	
	public function admin_add($id=null){
		if($id!=null){
			$this->User->id=$id;
			if (!$this->User->exists())throw new NotFoundException(__('Usuário inexistente'));
		}
		if($this->request->is('post') || $this->request->is('put')){
			if($this->request->data['User']['password']=='')unset($this->request->data['User']['password']);
			if($id==null) $this->User->create();
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('Usuário criado com sucesso!'),'sucesso');
				//$this->redirect('/admin/');
			}else{
				$this->Session->setFlash(__('Alguma coisa está errada, verifique abaixo!'),'erro');
			}
		}else{
			$user=$this->User->read();
			unset($user['User']['password']);
			if($id!=null) $this->request->data=$user;
		}
		
	}
	
	public function admin_logout(){
		$this->Cookie->destroy('lembrar');
		$this->redirect($this->Auth->logout());
	}
	
}