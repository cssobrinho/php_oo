<?php

declare(strict_types=1);

Class Produtos
{
	/**
	* @var PDO
	*/

	private $conexao;


	public function __construct()
	{
		try{
		    $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');	
		}catch(Exception $e){
            echo $e->getMessage();
            die();
		}
		
	}

	public function insert(string $descricao) : int
	{
		$sql = 'insert into produtos(descricao) value(?)';
		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $descricao);
		$prepare->execute();
        
        return $prepare->rowCount();
	} 

	public function delete(int $id) : int
	{
		$sql = 'delete from produtos where id = ?';

		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $id);
		$prepare->execute();

		return $prepare->rowCount();

	}

	public function update(string $descricao, int $id) : int
	{
		$sql = 'update produtos set descricao = ? where id = ?';

		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $descricao);
		$prepare->bindParam(2, $id);

		$prepare->execute();

		return $prepare->rowCount();
	}

	public function list() : array
	{
		$sql = 'select * from produtos';

		$produtos = [];

		#echo '<h3>Produtos: </h3>';
		foreach($this->conexao->query($sql) as $key => $value)
		{
			array_push($produtos, $value);
			#echo 'Id: '.$value['id'].'<br> Descricao: '.$value['descricao'].'<hr>';
		}
		return $produtos;
	}
}

