<?php
class UserController extends Controller{
    function connexion(){
        if($this->request->data){
            $data = $this->request->data;
            $data->pass = sha1($data->pass);
            $this->loadModel('User');
            $user = $this->User->findFirst(array(
                'condition' => array('mail' => $data->mail,'pass' => $data->pass)
            ));
            if(!empty($user)){
                debug($user);
            }
            debug($data);
        }
    }
    function deconnexion(){

    }
    function inscription(){

    }
}