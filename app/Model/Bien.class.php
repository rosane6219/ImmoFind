<?php
class Bien extends Model {
    private $type;// location,vente
    private $prix;
    private $ville;
    private $cp;//CodePostal
    private $titre;
    private $descriptif;
    private $dateModif;// mis à jour a chaque modification pour pouvoir gerer les biens à la une

    public function __construct($t,$p,$v,$c,$ti,$d,$m)
    {
        $this->type = $t;
        $this->prix = $p;
        $this->ville = $v;
        $this->cp = $c;
        $this->titre = $ti;
        $this->descriptif = $d;
        $this->dateModif = $m;
    }
   
    public function getType(){return $this->type;}
    public function getPrix(){return $this->prix;}
    public function getville(){return $this->ville;}
    public function getCp(){return $this->cp;}
    public function getTitre(){return $this->titre;}
    public function getDescriptif(){return $this->descriptif;}
    public function getDate(){return $this->dateModif;}

    public function setType($t){ $this->type = $t ;}
    public function setPrix($p){ $this->prix = $p;}
    public function setville($v){  $this->ville = $v;}
    public function setCp($c){  $this->cp = $c;}
    public function setTitre($ti){  $this->titre = $ti;}
    public function setDescptif($d){  $this->descriptif = $d;}
    public function setDate($m){  $this->dateModif = $m;}
}

?>