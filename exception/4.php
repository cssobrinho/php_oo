<?php
//Clase Exception

function validarUsuario(array $usuario)
{
	if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
	{
		throw new Exception ("Campos obrigatórios não preenchidos!");
	}

	return true;
}

$usuario = [
	'codigo' => 1,
	'nome' => '',
	'idade' => 39,
];

try {
    
    $status = validarUsuario($usuario);	

} catch (Exception $e){
	
	echo $e->getMessage();
	die();

}

echo "\n\n...executando...\n";
