<?php
// recuperer l'url et savoir quoi en faire 
class Dispatcher{

    var $request ;
    public function __construct()
    {
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);//request contrient le nom du controlleur  
        $controller = $this->loadController();
      //  print_r(get_class_methods($controller));
        //die();
        if (!in_array($this->request->action,get_class_methods($controller))){
            $this->error ('le controlleur '.$this->request->controller.'n\'a pas de methode '.$this->request->action);
        }
        call_user_func_array(array($controller,$this->request->action),$this->request->params);//
        //$controller->view();
        $controller->render($this->request->action);
    }

    function error($message){
        $controller = new Controller($this->request);
        $controller->set('message',$message);
        $controller->render('/error/404');
        die();

    }
    function loadController(){
        $name = ucfirst($this->request->controller).'Controller' ;
        $file = ROOT.DS.'Controller'.DS.$name.'.php';
        require $file;
        return new $name($this->request);
    }
}
?>