<?php

    $name = $_GET['name'];

    
    $paragrafo ='Oggi è stata una brutta giornata per tutti';
    
    $nome_censurato = str_replace($name, '***', $paragrafo);
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
    <h1>Frase originiraria:</h1>
    <h2><p> <?= $paragrafo ?></p></h2>
    <h2><?= strlen($paragrafo)?></h2>

    <form action="" method="get">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <button>Inserisci</button>
    </form>

    <h2><?= $name ?></h2>

    <h2><?= $nome_censurato ?></h2>
    <h2><?= strlen($nome_censurato)?></h2>
</body>
</html>