<?php

class PageController extends Controller{
 
    

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
        $this->loadModel('Collaborateur');
        $test = $this->Collaborateur->findFirst(array(
            'condition' => 'id=2'
        ));
        //print_r($test);
        $this->set('Collaborateur',$test);
    }
}
