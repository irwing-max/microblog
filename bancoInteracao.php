<?php 

require_once("banco.php");
class BancoInteracao
{
	private $banco;

	public function __construct( $banco ){
		$this->banco = $banco;
	}

	public function gravaDados($post, $data, $hora){
		$insere = "insert into posts(post,data,hora) values ('$post','$data','$hora')";
		$insereStmt =  $this->banco->getConn()->prepare($insere);
		$insereStmt->bindParam(':post', $post, PDO::PARAM_STR, 99);
		$insereStmt->execute();

	}

	public function getPosts(){
		$sql = "SELECT post,ID_post FROM posts order by ID_post desc";
		$stmt = $this->banco->getConn()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}
}