<?php

class Admin extends User{

    public function __construct($n,$p,$m,$s,$a)
    {
        parent::__construct($n,$p,$m,$s,$a);
    }
    public function Add(){}
    public function Modify(){}
    public function Delete(){}
    public function EditLink(){}
}

?>