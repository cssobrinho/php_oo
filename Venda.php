<?php

class venda{

	private  string $data;
	private string $produto;
	private int $quantidade;
	private float $valorTotal;


	public function __construct(
		string $data,
		string $produto,
		int $quantidade,
		float $valorTotal)
	{
	    $this->data = $data;
	    $this->produto = $produto;
	    $this->quantidade = $quantidade;
	    $this->valorTotal = $valorTotal;
    }

	public function exibirDadosVenda() 
	{
		echo  'Data da venda: '.$this->data;
		echo PHP_EOL;
		echo  'O valor do produto: '.$this->produto;
		echo PHP_EOL;
		echo  'A quantidade do produto: '.$this->quantidade.' Un';
		echo PHP_EOL;
		echo  'O valor total da venda é: R$'.$this->valorTotal;
    }

}


$cupom = new venda('25/04/2020', 'Azeite de Dende', 5, 45.00 );
$cupom->exibirDadosVenda();

