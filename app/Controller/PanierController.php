<?php

class PanierController extends Controller{
 
    

    public function index($userId) {
        $nb = 2;
        $this->loadModel('Panier');
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Panier->find(array(
            'limit' => $nb*($this->request->page),
            'orderby' => 'modif',
            'order' => 'DESC'
        ));//select 
        $d['total'] = $this->Panier->findCount();
        $d['page'] = ceil($d['total']/$nb);
        $this->set($d);
    }
    
    public function search(){
        $this->render('recherche');
    }

    public function view($id){
        $this->loadModel('Panier');
        $d['page'] = $this->Panier->findFirst(array(
            'condition' => array('id' => $id )
        ));
        if(empty($d['page'])){//empty($test)
            $this->e404('Page introuvable');
        }else{
            
        }
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Panier->find(array());//select *
        $this->set($d);
        
    }
 
    /**
     * Fonction Backoffice
     */
    function admin_list(){
        $nb = 10 ;
        $this->loadModel('Panier');
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Panier->find(array(
            'fields' => 'id,titre ',
            'limit' => $nb*($this->request->page),
            'orderby' => 'modif',
            'order' => 'DESC'
        ));//select 
        $d['total'] = $this->Panier->findCount();
        $d['page'] = ceil($d['total']/$nb);
        $this->set($d);
    }

    function admin_delete($id){
        $this->loadModel('Panier');
        $this->Panier->delete($id);
        $this->Session->setFlash(' le contenu a Panier été supprimé','SUCCES');
        $this->redirect('admin/Panier/list');
    }

   

    public function admin_edit($id=null){
        $this->loadModel('Panier');
        $d['id'] = '';
        if($this->request->data){
            //if($this->Panier->validates($this->request->data)){
            $this->Panier->save($this->request->data);
            $this->Session->setFlash(' le contenu a Panier été sauvegardé','SUCCES');
            $id = $this->Panier->id;
            
            
        }
        if($id){
            $this->request->data = $this->Panier->findFirst(array(
                'condition' => array('id' => $id)
            ));
            $d['id'] = $id;
        }
        $this->set($d);
    }
}
