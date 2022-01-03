<?php
class Request{

    public $url;//quelle page a ete appelée
    public $page = 1;
    public $prefix = false;
    
    function __construct()
    {
        $this->url = $_SERVER['PATH_INFO'];
        // url tapé par user $this->request->url; 
        //print_r($_SERVER);
        if (isset($_GET['page'])){
            if(is_numeric($_GET['page'])){
                if($_GET['page'] > 0){
                    $this->page = round($_GET['page']);
                }  
            }
        }
    }
}
?>