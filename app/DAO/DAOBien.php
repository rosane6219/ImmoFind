<?php

require_once('./Model/User.class.php');

class DAOUser{
  private $bien;
  private $connexion;
  
  public function __construct($u) {
    $this->bien = $u;
	$this->connexion = null;
  }
  
  public function connect(){
	  
	try{
		//$this->connexion = new PDO("mysql:host=" . PDO_HOST . ";"."dbname=" . PDO_DBBASE, PDO_USER, PDO_PW);
	}catch (PDOException $e){
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}  	  
  }

  public function getBien() {
     return $this->Bien;
  }
  
  /*public function setAdresse($a) {
       $this->adresse = $a;
  }*/

  //version simplifiée d'une dao avec une méthode add et des parametres nommés et bindValue
  /*
  public function add() {
      
	try{
		$this->connect();
		$query = " INSERT INTO bien values(:id,:type,:prix,:ville,:cp,:titre,:descriptif,:dateModif)"; 
		$data = array( 
		':id'=>$this->bien->getId(),
		':type'=> $this->bien->getType(), 
		':prix'=> $this->bien->getPrix(),
        ':ville' => $this->bien->getVille(),
        ':cp' => $this->bien->getCp(),
        ':titre' => $this->bien->getTitre(),
        ':descriptif' => $this->bien->getDescriptif(),
        ':dateModif' => $this->bien->getDate(),
		);
		//$sth = $this->connexion->prepare( $query );
		$res=$sth->execute( $data );
		$this->connexion = null;
		return $res;
	}catch (PDOException $e){
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
  }
  
   public function delete() {
      
	try{
		$this->connect();
		$query = " delete from bien where id=:id "; 
		$data = array( 
         ':id'=>$this->user->getId(),
		);
		$sth = $this->connexion->prepare( $query );
		$res=$sth->execute( $data );
		$this->connexion = null;
		return $res;
	}catch (PDOException $e){
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
  }
  
    public function update() {
      
	try{
		$this->connect();
		$query = " update User set type=:type,prix=:prix,ville=:ville,cp=:cp,titre=:titre,descriptif=:descriptif,datemodif=:dateModif  where id=:id "; 
		$data = array( 
            ':id'=>$this->bien->getId(),
		    ':type'=> $this->bien->getType(), 
		    ':prix'=> $this->bien->getPrix(),
            ':ville' => $this->bien->getVille(),
            ':cp' => $this->bien->getCp(),
            ':titre' => $this->bien->getTitre(),
            ':descriptif' => $this->bien->getDescriptif(),
            ':dateModif' => $this->bien->getDate(),
		);
		//$sth = $this->connexion->prepare( $query );
	//	$res=$sth->execute( $data );
		$this->connexion = null;
		//return $res;
	}catch (PDOException $e){
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
    }
  
    
  */
   
}
?>