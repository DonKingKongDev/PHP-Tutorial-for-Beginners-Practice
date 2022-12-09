<?php 

// condicion
/*
$mayorymenor = 1 < 3;

echo $mayorymenor == false; // se puede poner true o false
*/
$First_Name = "Pedro";
$Last_Name = "Rodrigo";
// Condicionales Signos

// https://programadorwebvalencia.com/cursos/php/condicionales/

// Se puede añadir 1 variable con el nombre o numero a los costados
if ($First_Name == "Pero" || $Last_Name == "rodrigo") {
    echo "La condicion es verdadera";
} else if ($First_Name == "Pedro" && $Last_Name == "Rodrigo") {
    echo "La segunda condicion es verdadera";
} else {
    echo "La condiciones anteriores son falsas";
}
//

?>