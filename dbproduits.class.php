<?php 
//UTILISATION DE PROGRAMMATION ORIENTEE OBJET
class DB{

	private $host = 'localhost';
	private $username = 'root';
	private $password = 'root';  
	private $database = 'cooky_ham';
	private $db;

	public function __construct($host = null, $username = null, $password = null, $database = null){
		if ($host != null){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->databse = $database;
		}
		try{
		$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		}catch (PDOException $e){
		die('<h1>Impossible de se connecter à la base de donnée</h1>');
		}
	}

	public function query($sql){
		$req =$this->db->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
	}

}
 ?>
