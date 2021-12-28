<?php

class PageController extends Controller{
 
    

    public function index() {
        $this->render('accueil');
    }

    public function view (){
        //$this->set('phrase', $name);
        
        $this->set(array(
            'phrase' => 'Je taime très fort',
            'name' => 'Rosane'
        ));

        $this->render('index');
        

    }

}
