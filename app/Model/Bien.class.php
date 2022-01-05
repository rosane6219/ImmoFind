<?php
class Bien extends Model {
    /*
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
    */
    var $validate = array(
        'titre' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un titre'
        ),
        'url' => array(
            'rule' => '([a-z0-9\-]+)',
            'message' => "L'url n'est pas valide"
        )
    ); 

    function validates($data){
         $errors = array();
         foreach($this->validate as $k=>$v){
             if (!isset($data->$k)){
                 $errors[$k] = $v['message'];
             }else{
                 if($v['rule'] == 'noEmpty' && empty($data->$k)){
                     $errors[$k] = $v['message'];
                 }elseif(!preg_match('/^'.$v['rule'].'$/',$data->$k)){
                    $errors[$k] = $v['message'];
                 }
             }
         }
         debug($errors);
         die();
    }
}

?>