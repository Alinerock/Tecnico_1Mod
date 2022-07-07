<?php

$CodProd = $_GET["CodProd"];
$Descricao = $_GET["Descricao"];
$Valor = $_GET["Valor"];
$Qtde = $_GET["Qtde"];

if ($Valor != ''   && $Qtde != '' &&
    $Valor != null && $Qtde != null)
{
	$Resultado = $Valor * $Qtde;

	echo "Valor Total = R$ ";	
}
else
{
	$Resultado = "Não foi possível realizar a operação, por favor complete os campos";
}

echo $Resultado;