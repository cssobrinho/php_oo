<?php

declare(strict_types=1);

class ContaBancaria
{
	/** Php 7.3
	*@var string
	*/
    private $nomeBanco;
    /**
	*@var string
	*/
    private $nomeTitular;
    /**
	*@var string
	*/
    private $numeroAgencia;
    /**
	*@var string
	*/
    private $numeroConta;
    /**
	*@var float
	*/
    private $saldo;

    public function __construct(
	    string $nomeBanco,
	    string $nomeTitular,
	    string $numeroAgencia,
	    string $numeroConta,
	    float $saldo) #parametros passados pela instância da objeto $conta
    {
    	$this->nomeBanco = $nomeBanco;
    	$this->nomeTitular = $nomeTitular;
    	$this->numeroAgencia = $numeroAgencia;
    	$this->numeroConta = $numeroConta;
    	$this->saldo = $saldo;       
    }

    public function obterSaldo() : string
    {
        return 'Seu saldo atual é: R$'.$this->saldo;
    }

    public function sacar(float $valor) : string
    {
    	$this->saldo -= $valor;
    	return 'O valor do seu saque é: R$'.$valor;

    }

    public function depositar(float $valor) : string
    {
    	$this->saldo += $valor;
    	return 'O valor do seu depósito é: R$'.$valor;
    }
}

$conta = new ContaBancaria('Banco Itau', 'Carlos Silva', '1234', '1425366', 1332.10);


//var_dump($conta);
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->depositar(1000.00);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(2000.00);
echo PHP_EOL;
echo $conta->obterSaldo();
//PHP_EOL;
//echo $conta->saldo;
?>