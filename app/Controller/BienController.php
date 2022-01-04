<?php

class BienController extends Controller{
 
    

    public function index() {
        $nb = 2;
        $this->loadModel('Bien');
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Bien->find(array(
            'limit' => $nb*($this->request->page)
        ));//select 
        $d['total'] = $this->Bien->findCount();
        $d['page'] = ceil($d['total']/$nb);
        $this->set($d);
    }
    
    public function search(){
        $this->render('recherche');
    }

    public function view($id){
        $this->loadModel('Bien');
        $d['page'] = $this->Bien->findFirst(array(
            'condition' => array('id' => $id )
        ));
        if(empty($d['page'])){//empty($test)
            $this->e404('Page introuvable');
        }else{
            
        }
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Bien->find(array());//select *
        $this->set($d);
        
    }
 
    /**
     * Fonction Backoffice
     */
    function admin_list(){
        $nb = 10 ;
        $this->loadModel('Bien');
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Bien->find(array(
            'fields' => 'id,titre ',
            'limit' => $nb*($this->request->page)
        ));//select 
        $d['total'] = $this->Bien->findCount();
        $d['page'] = ceil($d['total']/$nb);
        $this->set($d);
    }

    function admin_delete($id){
        $this->loadModel('Bien');
        $this->Bien->delete($id);
        $this->Session->setFlash(' le contenu a bien été supprimé','SUCCES');
        $this->redirect('admin/bien/list');
    }

    public function create(){
        $this->render('createBien');
    }

    public function admin_edit($id=null){
        $this->loadModel('Bien');
        if($this->request->data){
            //debug($this->request->data);
            $this->Bien->update($this->request->data);
            $id = $this->Bien->id;
        }
        $this->request->data = $this->Bien->findFirst(array(
            'condition' => array('id' => $id)
        ));
        //$this->set($d);
    }
}
