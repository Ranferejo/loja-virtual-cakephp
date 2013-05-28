<?php

class EavCamposController extends AppController {
	public function ajax_index($model=null,$foreign_id=null){
		if($model==null && $foreign_id==null)throw new ForbiddenException('Ops! Isto não é permitido!');
		if($model==null)throw new ForbiddenException('Ops! Isto não é permitido!');
		
		$this->set('model',$model);
		$this->set('foreign_id',$foreign_id);
		
		$conditions=array('EavCampo.model'=>$model);
		if($foreign_id==null)$conditions['EavCampo.foreign_id']=$foreign_id;
		
		$this->set('Campos',$this->EavCampo->find('all',array('conditions'=>$conditions)));
		
	}
	public function ajax_add($model=null,$foreign_id=null){
		if($model==null || $foreign_id==null)throw new ForbiddenException('Ops! Isto não é permitido!');
		$this->set('model',$model);
		$this->set('foreign_id',$foreign_id);
		if($this->request->is('post')||$this->request->is('put')){
			
			$this->EavCampo->create();
			
			$this->request->data['EavCampo']['model']=$model;
			$this->request->data['EavCampo']['foreign_id']=$foreign_id;

			
			if($this->EavCampo->saveAll($this->request->data)){
				
				$conditions=array('EavCampo.model'=>$model);
				$conditions['EavCampo.foreign_id']=$foreign_id;
				
				//return $this->redirect(array('action'=>'index',$model,$foreign_id));
				
			}else{
				throw new ForbiddenException('Ops! Não pode ser salvo!');
			}
		}
	}
	public function ajax_edita($id=null,$model=null,$foreign_id=null){
		if($model==null || $foreign_id==null)throw new ForbiddenException('Ops! Isto não é permitido!');
		$this->EavCampo->id=$id;
		if(!$this->EavCampo->exists()) throw new NotFoundException('Página não encontrada');
		if($this->request->is('post')||$this->request->is('put')){		
			if($this->EavCampo->saveAll($this->request->data)){
				
				return $this->redirect(array('action'=>'index',$model,$foreign_id));
				
			}else{
				throw new ForbiddenException('Ops! Não pode ser salvo!');
			}
		}
	}
	public function ajax_remove($id=null,$model=null,$foreign_id=null){
		if($model==null || $foreign_id==null)throw new ForbiddenException('Ops! Isto não é permitido!');
		$this->EavCampo->id=$id;
		if(!$this->EavCampo->exists()) throw new NotFoundException('Página não encontrada');
			$this->EavCampo->delete($id,true);
			return $this->redirect(array('action'=>'index',$model,$foreign_id));

	}
}