<?php

$title = "Titulo Funcion (Fuctions)";

function sum($a,$b){

   $result = $a + $b;

    return $result;

}

$result = sum(1,6);
// Nueva Opcion de mostrar en funcion

function output($valor){

    print "<pre>";
    print_r($valor);
    print "</pre>";
}

$nombre = ['Pedro','Marco','Julio'];
// 


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/php-fundamentals.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
        <!--  <?= $result ?> --> 

        <?php 
        output($nombre); 
        ?>

      </div>
    </div>
  </body>

</html>