<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem vindos (as) ao Screen Match!\n"; 

$nomeFilme = "Top Gun - Maverick";


$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) { 
    $notas[] = (float)$argv[$contador]; 
  }

$notaFilme = array_sum($notas) / $quantidadeDeNotas;       
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);                  //   (||=OU, &&=E) >> operadores lógicos


echo "Nome do filme: $nomeFilme \n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de Lançamento: $anoLancamento \n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não se case" => "comédia",
    default => "Gênero Desconhecido",
};

echo "O gênero do filme é: $genero\n";


$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 7.8, 
    genero:"super-herói"
  );


echo $filme->anoLancamento;

var_dump($notas);
sort($notas); //sort ordena itens de um array
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));


$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);


?>

