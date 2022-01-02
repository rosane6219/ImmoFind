<?php

class PartnerController extends Controller{
 
    public function index(){
        $this->loadModel('Partenaire');
        $d['pages']= $this->Partenaire->find(array());//select *
        $this->set($d);
    }

    public function view($id=null){
        $this->loadModel('Partenaire');
        $d['page'] = $this->Partenaire->findFirst(array(
            'condition' => array('id' => $id )
        ));
        if(empty($d['page'])){//empty($test)
            $this->e404('Page introuvable');
        }else{
            
        }
        //print_r($test);
        //$this->set('test',$test);
        $d['pages']= $this->Partenaire->find(array());//select *
        $this->set($d);
        
    }
    public function getAll(){
        $this->loadModel('Partenaire');
        return $this->Partenaire->find(array());
    }
}
