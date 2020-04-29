<?php
//Clase Exception

function validarUsuario(array $usuario) : bool
{
	if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
	{
		throw new Exception("Campos obrigatórios não preenchidos! ");
	}
	
	return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => 'aaaa',
    'idade' => 39,
];

$status = false;

try
{
	$status = validarUsuario($usuario);

} catch(Exception $e){
	echo $e->getMessage();

}finally{
	echo " Status da Operação: ".(int)$status;
    die();
}

echo "\n ... executando ...\n";