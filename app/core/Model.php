<?php
class Model {

    static $connections = array();
    public $conf = 'default';
    public $table = false ;
    public $db;
    public function __construct()
    {   // cnx à la BDD
        $conf = Conf::$databases[$this->conf];
        if (isset(Model::$connections[$this->conf])) {
            $this->db = Model::$connections[$this->conf];
            return true;
        }
       try{
        $pdo = new PDO('pgsql:host='.$conf['host'].';port='.$conf['port'].';dbname='.$conf['database'].';',$conf['login'],$conf['password']);
        Model::$connections[$this->conf] = $pdo;
        $this->db = $pdo;
       }catch(PDOException $e){
           if (Conf::$debug >= 1) {
           die($e->getMessage());
           }else{
            die('Impossible de se connecter à la BDD');
           }
       }
       echo "BDD chargéé et bien connetée";
       //initialisation des var 
       if ($this->table == false ){
           $this->table = strtolower(get_class($this));
       }
    }
    public function find($req){

        $sql = 'SELECT * FROM '.$this->table.' as '.get_class($this). ' ';//this->table contient le nom de la table dans la BDD
        if(isset($req['condition'])) {
            $sql .= 'WHERE '.$req['condition'];
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
}