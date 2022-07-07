<?php

$Nome = $_GET["Nome"];
$Nota1 = $_GET["Nota1"];
$Nota2 = $_GET["Nota2"];
$Nota3 = $_GET["Nota3"];

$Media = ($Nota1 + $Nota2 + $Nota3) / 3; 


if ($Nome != ""   && $Nota1 != ""   && $Nota2 != ""   && $Nota3 != "" &&
    $Nome != null && $Nota1 != null && $Nota2 != null && $Nota3 != null)
{
	if ($Media >= 0 && $Media <= 4.99) 
    {
    	$Resultado = "Gravação executada com sucesso";

    	echo "<div style='color:red;'>Nome: "  . $Nome      . "<br> 
    	                              Média: " . $Media     . "<br>
    	                              <hr>"    . $Resultado . "</div>";
    }

    else if ($Media >= 5 && $Media <= 6.99) 
    {
    	$Resultado = "Gravação executada com sucesso";

    	echo "<div style='color:blue;'>Nome: "  . $Nome      . "<br> 
    	                               Média: " . $Media     . "<br>
    	                               <hr>"    . $Resultado . "</div>";
    }

    else if ($Media >= 7 && $Media <= 10) 
    {
	    $Resultado = "Gravação executada com sucesso";

    	echo "<div style='color:green;'>Nome: "  . $Nome      . "<br> 
    	                                Média: " . $Media     . "<br>
    	                                <hr>"    . $Resultado . "</div>";
    }

    else
    {
	    $Resultado = "Erro na gravação. Por favor, tente novamente com notas entre 0 e 10.";
	    echo $Resultado;
    }
}

else
{
	$Resultado = "Erro na gravação. Por favor, complete todos os campos.";
	echo $Resultado;
}

?>
