<?php

class User{
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $password ;
    protected $admin;//mis a vrai au niveau de la base de données uniquement si c'est un admin 

    public function __construct($n,$p,$m,$s,$a)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->mail = $m;
        $this->password = $s;
        $this->admin = $a; 
    }

    public function getName(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getMail(){return $this->mail;}
    public function getPass(){return $this->password;}
    public function getAdmin(){return $this->admin;}
   

    public function setName($t){ $this->nom = $t ;}
    public function setPrenom($p){ $this->prenom = $p;}
    public function setMail($v){  $this->mail = $v;}
    public function setPass($c){  $this->password = $c;}
    public function setAdmin($ti){  $this->admin= $ti;}
   
}
?>