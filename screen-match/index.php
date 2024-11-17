<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo (a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor - Ragnarok",
    2021,
    Genero::SuperHeroi,
    180,
);


$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);
 
echo "Média do filme: " . $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2004, Genero::Drama, 10, 25, 45);

echo $serie->anoLancamento ."\n";

$serie->avalia(8.5);

echo "Média da série: " . $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Duração da maratona: " . $duracao . " minutos\n";