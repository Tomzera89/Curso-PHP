<?php


$caminhoArquivo = "filme.json";
$conteudoArquivo = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivo, true);
print_r($filme);


?>