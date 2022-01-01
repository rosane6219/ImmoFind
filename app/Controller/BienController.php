<?php

class BienController extends Controller{
 
    

    public function index() {
        $this->loadModel('Bien');
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Bien->find(array());//select *
        $this->set($d);
        $this->render('view');
    }
    
    public function create(){
        $this->render('createBien');
    }

    public function modify(){
        $this->render('modifBien');
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
}
