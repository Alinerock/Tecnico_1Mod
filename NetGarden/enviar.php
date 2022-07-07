<?php

$Nome = $_GET["Nome"];
$Sobrenome = $_GET["Sobrenome"];
$Telefone = $_GET["Telefone"];
$Telefone2 = $_GET["Telefone2"];
$Email = $_GET["Email"];
$Senha = $_GET["Senha"];
$Endereco = $_GET["Endereco"];
$Complemento = $_GET["Complemento"];
$Cidade = $_GET["Cidade"];
$Estado = $_GET["Estado"];
$CEP = $_GET["CEP"];

if ($Nome != ''   && $Sobrenome != ''   && $Telefone != ''   && $Email != ''   && $Senha != ''   && $Endereco != ''   && $Cidade != ''   && $Estado != ''   && $CEP != ''   && 
	$Nome != null && $Sobrenome != null && $Telefone != null && $Email != null && $Senha != null && $Endereco != null && $Cidade != null && $Estado != null && $CEP != null)
{
	$Resultado = "Gravação executada com sucesso!";
}
else 
{
	$Resultado = "Por favor, preencha todos os campos.";
}

echo $Resultado;