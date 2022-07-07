<?php

$CodProd = $_GET["CodProd"];
$Descricao = $_GET["Descricao"];
$Valor = $_GET["Valor"];
$Qtde = $_GET["Qtde"];

if ($CodProd != ''   && $Descricao != ''   && $Valor != ''   && $Qtde != '' &&
    $CodProd != null && $Descricao != null && $Valor != null && $Qtde != null)
{
	$Resultado = "Gravação executada com sucesso!";
}
else 
{
	$Resultado = "Por favor, preencha todos os campos.";
}

echo $Resultado;