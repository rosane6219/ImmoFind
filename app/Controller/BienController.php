<?php

class BienController extends Controller{
 
    

    public function index() {
        $this->render('accueil');
    }

    /*public function view (){
        //$this->set('phrase', $name);
        
        $this->set(array(
            'phrase' => 'Je taime très fort',
            'name' => 'Rosane'
        ));

        $this->render('index'); 
    }*/

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
