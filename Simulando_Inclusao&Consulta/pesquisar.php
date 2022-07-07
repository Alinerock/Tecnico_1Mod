<?php

$CodProd = $_GET["CodProd"];
$Descricao = $_GET["Descricao"];
$Valor = $_GET["Valor"];
$Qtde = $_GET["Qtde"];

if ($CodProd == '234')
{
	$dadosProd = array (
		"CodProd" => " 234",
		"Descricao" => " Lápis",
		"Valor" => " R$ 2,00",
	    "Qtde" => " 12");

	$ResultadoJson = json_encode($dadosProd);
	echo $ResultadoJson;
}
else
{
	echo "Você quis dizer CodProd 234?";
}