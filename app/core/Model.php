<?php
class Model {

    static $connections = array();
    public $conf = 'default';
    public $table = false ;
    public $db;

    public function __construct()
    {   
        //initialisation des var 
        if ($this->table === false ){
        $this->table = strtolower(get_class($this));// nom de la table doit etre = au nom de la classe 
        }
        // cnx à la BDD
        $conf = Conf::$databases[$this->conf];
        if (isset(Model::$connections[$this->conf])) {
            $this->db = Model::$connections[$this->conf];
            return true;
        }
       try{
        $pdo = new PDO('pgsql:host='.$conf['host'].';port='.$conf['port'].';dbname='.$conf['database'].';',
            $conf['login'],
            $conf['password'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//pour gerer lurl n'importe quoi qui fou la merde dans la requete sql du genre where blabla -_-

        Model::$connections[$this->conf] = $pdo;
        $this->db = $pdo;
       }catch(PDOException $e){
           if (Conf::$debug >= 1) {
           die($e->getMessage());
           }else{
            die('Impossible de se connecter à la BDD');
           }
       }
       //echo "BDD chargéé et bien connetée";
      
    }

    //******************SEARCH*******************//
    public function find($req){// $req = null

        $sql = 'SELECT * FROM '.$this->table.' as '.get_class($this). ' ';//this->table contient le nom de la table dans la BDD
        
        // construction de la condition
        //print_r($req['condition']);
        if(isset($req['condition'])) {
            //$sql .= 'WHERE '.$req['condition'];
            $sql .= 'WHERE ';
            if (!is_array($req['condition'])){
                $sql .=$req['condition'];
            }else{
                $cond = array();
                foreach($req['condition'] as $k=>$v){
                    if (!is_numeric($v)){
                        $v= $this->db->quote($v);
                    }
                   $cond[] = "$k=$v";
                }
                $sql .= implode(' AND ',$cond);
            }   
        }
        //die($sql);
        $pre = $this->db->prepare($sql);
        $pre->execute();
        return $pre->fetchAll((PDO::FETCH_OBJ));
        die($this->table);
    }
    public function findFirst($req){
        return current($this->find($req));//return le premier enregistrement qui est current 
    }

    //****************Insert******************************/
    public function add($req){
        $sql = 'INSERT INTO '.$this->table. 'VALUES'.get_class($this). ' ';//this->table contient le nom de la table dans la BDD
        
        // construction de la condition
        //print_r($req['condition']);
        if(isset($req['condition'])) {
            //$sql .= 'WHERE '.$req['condition'];
            $sql .= 'WHERE ';
            if (!is_array($req['condition'])){
                $sql .=$req['condition'];
            }else{
                $cond = array();
                foreach($req['condition'] as $k=>$v){
                    if (!is_numeric($v)){
                        $v= $this->db->quote($v);
                    }
                   $cond[] = "$k=$v";
                }
                $sql .= implode(' AND ',$cond);
            }   
        }
        //die($sql);
        $pre = $this->db->prepare($sql);
        $pre->execute();
        return $pre->fetchAll((PDO::FETCH_OBJ));
        die($this->table);
    }
}