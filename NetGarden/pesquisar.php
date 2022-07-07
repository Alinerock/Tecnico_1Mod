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


if ($Nome == 'Guilherme')
{
	$dadosProd = array (
		"Nome" => ": Guilherme",
		"Sobrenome" => ": Moreira",
		"Telefone" => ": (11) 97489-4854",
        "Telefone2" => ": (11) 96256-3748",
        "Email" => ": Guilherme.Rocha1013@gmail.com",
        "Senha" => ": 4a002E8G922",
        "Endereco" => ": Castelo Branco, 47",
        "Complemento" => ": Casa 2",
        "Cidade" => ": São Bernardo do Campo",
        "Estado" => ": São Paulo-SP",
        "CEP" => ": 093433-232");

	$ResultadoJson = json_encode($dadosProd);
	echo $ResultadoJson;
}