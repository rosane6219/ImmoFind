<?php

require_once('./Model/User.class.php');

class DAOUser{
  private $user;
  private $connexion;
  
  public function __construct($u) {
    $this->user = $u;
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

  public function getUser() {
     return $this->User;
  }
  
  /*public function setAdresse($a) {
       $this->adresse = $a;
  }*/

  /*
  //version simplifiée d'une dao avec une méthode add et des parametres nommés et bindValue
  public function add() {
      
	try{
		$this->connect();
		$query = " INSERT INTO User values(:id,:nom,:prenom,:mail,:password,:admin)"; 
		$data = array( 
		':id'=>$this->user->getId(),
		':nom'=> $this->user->getName(), 
		':prenom'=> $this->user->getPrenom(),
        ':mail' => $this->user->getMail(),
        ':passord' => $this->user->getPass(),
        ':admin' => $this->user->getAdmin()
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
  
   public function delete() {
      
	try{
		$this->connect();
		$query = " delete from User where id=:id "; 
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
		$query = " update User set nom=:nom, prenom=:prenom, mail=:mail, password=:password,  where id=:id "; 
		$data = array( 
            ':id'=>$this->user->getId(),
            ':nom'=> $this->user->getName(), 
            ':prenom'=> $this->user->getPrenom(),
            ':mail' => $this->user->getMail(),
            ':passord' => $this->user->getPass(),
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
  
    */
  
   
}
?>