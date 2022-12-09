<?php
/*
// Array basico
$Name = ['Pedro','Julia','Marcos','Gonzalos'];
//
print "<pre>";
// print_r($Name);
// Podemos mostrar solo el indexe con su numero del orden

echo $Name[1];

print "<pre>";
*/
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////

// Array Tradicional

/*

$Name = ['Pedro','Julia','Marcos','Gonzalos'];
// isset
// Determina si una variable está definida y no es null.
// Si una variable ha sido removida con unset(), esta ya no estará definida. isset() devolverá false si prueba una variable que ha sido definida como null. También tenga en cuenta que un byte null ("\0") no es equivalente a la constante null de PHP.
// Si son pasados varios parámetros, entonces isset() devolverá true únicamente si todos los parámetros están definidos. La evaluación se realiza de izquierda a derecha y se detiene tan pronto como se encuentre una variable no definida.


if (isset($Name[4])) {
    echo $Name[4];
} else {
    echo "El nombre no existe";
}

*/
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////

// Array Asociativo (Associative)

$Name = ['Pablo' => 'Marco', 'Salmaro' => 'Nico'];

print "<pre>";
print_r($Name);
print "<pre>";

$Selecionar = $Name['Pablo'];

print "<pre>";
print_r($Selecionar);
print "<pre>";


?>