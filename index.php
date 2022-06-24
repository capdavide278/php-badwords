<?php 

    $paragrafo ='Oggi è stata una brutta giornata per Genoveffa';

   /*  $_GET = [name]; */


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <p>Frase originiraria:</p>
    <h1><p> <?= $paragrafo ?></p></h1>
    <div><?= strlen($paragrafo)?></div>
</body>
</html>