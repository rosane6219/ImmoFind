<?php
class UserController extends Controller{
    function connexion(){
        //unset($_SESSION['User']);
        debug($this->Session->read());
        if($this->request->data){
            $data = $this->request->data;
            $data->pass = sha1($data->pass);
            $this->loadModel('User');
            $user = $this->User->findFirst(array(
                'condition' => array('mail' => $data->mail,'pass' => $data->pass)
            ));
            debug($user);
            if(!empty($user)){
               $this->Session->write('User',$user);
            }
            $this->request->data->pass = '';
            debug($data);
        }
        if($this->Session->isloged()){
            if($_SESSION['User']->admin == 1) {
              // $this->redirect('admin/bien/list');
            }
        }
    }
    function deconnexion(){
        unset($_SESSION['User']);
        debug($_SESSION['User']->admin); die();
        $this->Session->setFlash('Vous etes maintenant deconnecteé');
        $this->redirect('accueil/index');
    }
    function inscription(){

    }
}