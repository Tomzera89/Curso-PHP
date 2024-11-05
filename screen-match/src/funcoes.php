<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um Lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme é recente!\n";
    } else {
        echo "Esse filme não é um Lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}


function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();

    $filme->nome= $nome;
    $filme->anoLancamento= $anoLancamento;
    $filme->nota= $nota;
    $filme->geneto= $genero;
    
    return $filme;
}