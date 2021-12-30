<?php
// recuperer l'url et savoir quoi en faire 
class Dispatcher{

    var $request ;
    public function __construct()
    {
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);//request contrient le nom du controlleur  
        $controller = $this->loadController();
        if (!in_array($this->request->action, array_diff(get_class_methods($controller),get_class_methods('Controller')))){
            $this->error ('le controlleur '.$this->request->controller.'n\'a pas de methode '.$this->request->action);
        }
        call_user_func_array(array($controller,$this->request->action),$this->request->params);//
        //$controller->view();
        $controller->render($this->request->action);
    }

    function error($message){
        $controller = new Controller($this->request);
        $controller->e404($message);
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller' ;
        //die($name);
        $file = ROOT.DS.'Controller'.DS.$name.'.php';
        //die($file);
        require $file;
        //die($this->request);
        return new $name($this->request);//new PageController (url)
    }
}
?>