<?php


$arrayName = array();
echo "Hoeveel landen ga je toevoegen? " . "\n";
$ammountLanden = readline();
if (!is_numeric($ammountLanden))
{
  echo $ammountLanden . ' is geen getal';
  exit();
}


for ($i=0; $i < $ammountLanden; $i++)
{
  $array = array('Land' => '', 'Hoofdstad'=> '');
  echo "Welk land wil je toevoegen? \n";
  $array['Land'] = readline();
  echo "Wat is de hoofdstad? \n";
  $array['Hoofdstad'] = readline();
  array_push($arrayName, $array);
}


foreach ($arrayName as $key => $val)
{
  echo "De hoofdstad van " . $val['Land'] . ' is ' . $val['Hoofdstad'] . "\n";
}

 ?>
