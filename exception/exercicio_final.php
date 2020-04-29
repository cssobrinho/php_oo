<?php

function validaDivisao(int $num1, int $num2) : bool
{
	if(($num1 <= 0) || ($num2 <= 0))
	{
		throw new Exception("Digite números maiores do que zero '0' !");
	}
    return true;
}

$num1 = 3;
$num2 = -1;

/*$teste = validaDivisao($num1, $num2);

var_dump($teste);
*/
$status = false;

try{
	$status = validaDivisao($num1, $num2);

}catch(Exception $e){
	echo $e->getMessage();

}finally{

	echo " Status da Operação: ".(int)$status;
    die();
}