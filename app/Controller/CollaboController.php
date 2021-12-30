<?php

class CollaboController extends Controller{
 
    

    public function index() {
        $this->render('accueil');
    }

    public function view($id){
        $this->loadModel('Collaborateur');
        $d['page'] = $this->Collaborateur->findFirst(array(
            'condition' => array('id' => $id )
        ));
        if(empty($d['page'])){//empty($test)
            $this->e404('Page introuvable');
        }else{
            
        }
        //print_r($test);
        //$this->set('test',$test);
        //$d['pages']= $this->Collaborateur->find(array());//select *
        $this->set($d);
        
    }

    //recupère tt les enregistrement de la BDD
    public function getAll(){
        $this->loadModel('Collaborateur');
        return $this->Collaborateur->find(array());
    }
}
