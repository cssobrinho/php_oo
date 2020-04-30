<?php

require 'Produtos.php';

$produto = new Produtos();

switch($_GET['operacao'])
{
	case 'list':
	  echo '<h3>Produtos: </h3>';

	  foreach($produto->list() as $value)
	  {
	  	echo 'Id: '.$value['id'].'<br> Descrição: '.$value['descricao'].'<hr>';
	  }
	  
	  break;

	case 'insert':
	  $status = $produto->insert($descricao);

	  if(!$status)
	  {
	  	echo "Não foi possível executar a operação!";
	  	return false;
	  }

	  echo "Registro inserido com sucesso!";

	  break;

	case 'update':
	  
	  $status = $produto->update($descricao, $id);

	  if(!$status)
	  {
	  	echo "Não foi possível executar a operação!";
	  	return false;
	  }

	  echo "Registro alterado com sucesso!";

	  break;

	case 'delete':
	  $status = $produto->delete($id);

	   if(!$status)
	  {
	  	echo "Não foi possível executar a operação!";
	  	return false;
	  }

	  echo "Registro excluido  com sucesso!";

	  break;
}
