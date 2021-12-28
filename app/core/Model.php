<?php
class Model {
    public $db = 'default';

    public function __construct()
    {
       
        print_r(Conf::$database[$this->db]);
        
    }
    public function find(){
        
    }
}