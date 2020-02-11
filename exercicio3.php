<?php

$nome=readline("digite o nome:");
$idade=readline("digite a idade:");
$sexo=readline("digite o sexo(F/M):");


If($sexo=="f"&& $idade<25)
{
    echo "Aceita";
}
else
{
    echo "Não Aceita";
} 