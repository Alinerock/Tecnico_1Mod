<?php

$Email = $_GET["Email"];
$Senha = $_GET["Senha"];
$gridRadios = $_GET["gridRadios"];
$Obs = $_GET["Obs"];
$Checkbox = $_GET["Checkbox"];

if ($Email != ''   && $Senha != ''   && $gridRadios != ''   && $Obs != ''   && $Checkbox != ''   && 
	$Email != null && $Senha != null && $gridRadios != null && $Obs != null && $Checkbox != null)
{
	$Resultado = "Gravação executada com sucesso!";
}
else 
{
	$Resultado = "Por favor, preencha todos os campos.";
}

echo $Resultado;
