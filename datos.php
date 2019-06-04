<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Lleer los datos del formulario
//Las cajas de texto donde se puede escribir texto se lee directamente
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fnac'];

//Como leer un checkbox en un array es como un tren con vagones
$idiomas = $_POST['idioma'];
$id = print_r($idiomas, true);

//Leer un select
$estudios = $_POST['estudios'];

$genero = $_POST['genero'];
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        echo "<h2>Valor de nombre : $nombre</h2>";
        echo "<h2>Valor de apellido : $apellido</h2>";
        echo "<h2>Valor de Fecha de nacimiento: $fecha</h2>";
        echo "<h2>Valor de idiomas : $id</h2>";
        echo "<h2>Valor de estudios : $estudios</h2>";
        echo "<h2>Valor de genero : $genero</h2>";
        ?>

    </body>
</html>

