<?php

class UserModel {
	
	private $db;
	private $hold;
	
	public function __construct($dsn, $user, $pass){
		try{
			$this->db = new \PDO($dsn, $user, $pass);
		}
		catch (\PDOException $e){
			var_dump($e);
		}
	}// __construct
	
	//@return array
	public function getLatestUsers(){
		$statement = $this->db->prepare("
	   		SELECT userId, username 
	   		FROM users
	   		WHERE (userId > 0)
	   			AND (username IS NOT NULL)
	   		ORDER BY userId
	   
	   ");
	   try{
	   	if ($statement->execute()) {
		   	$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
		   	return $rows;
		   	} // if execute
		  }
		catch(\PDOException $e){
			echo "Could not query the database.";
			var_dump($e);
		}		  
		   return array();
		   
	}// getLatestUsers
	
	public function getIndivUser(){
		$this->hold = $_GET['userid'];
		$statement = $this->db->prepare("
	   		SELECT t1.userId, t2.userId, t1.firstname, t1.lastname, t1.username, t2.phone, t2.email
	   		FROM users t1, contact t2
	   		WHERE (t1.userId = $this->hold)
	   			AND (t2.userId = $this->hold)
	   ");
	  
	   try{
	   	if ($statement->execute()) {
		   	$rows = $statement->fetchAll(\PDO::FETCH_ASSOC); 	
		   	return $rows;
		   	} // if execute
		  }
		catch(\PDOException $e){
			echo "Could not query the database.";
			var_dump($e);
		}		  
		   return array();
		   
	}// getIndivUser

	
	
	
}