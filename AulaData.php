<?php
//Aula: manipulção de data e hora. Classe DateTime

$data = new DateTime();
//var_dump($data);
/*echo PHP_EOL;
echo $data->format('d-m-y');
echo PHP_EOL;
echo date('d/m/Y').PHP_EOL;*/
//echo $data->format('d-m-y H:i:s');

//Classe DateInterval
$intervalo = new DateInterval('P5Y10M5DT10H50M30S');
//$data->add($intervalo);
$data->sub($intervalo);

echo $data->format('d/m/y - H:m:s');

echo PHP_EOL;

echo $data->format('d/m/Y - H:m:s');