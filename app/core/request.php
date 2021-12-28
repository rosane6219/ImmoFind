<?php
class Request{

    public $url;//quelle page a ete appelée

    function __construct()
    {
        $this->url = $_SERVER['PATH_INFO'];
        // url tapé par user $this->request->url; 
        
    }
}
?>