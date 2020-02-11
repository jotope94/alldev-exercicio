<?php

$a;
$b;

$a=readline("digite o primeiro numero:");
$b=readline("digite o segundo numero:");
$c=$a+$b;
if($c>20)
{
  $c=$c+8;
   echo "numero é maior que vinte soma 8un:".$c;
}
else
{
  $c=$c-5;
   echo "numero é menor ou igual que vinte subtrai 5un:".$c;
}