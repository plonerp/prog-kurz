<?php

function vytiskniTrojuhelnik(array $pyramida): void
{
    foreach ($pyramida as $radek) {
        foreach ($radek as $sloupec) {
            echo '[' . $sloupec . ']';
        }
        echo PHP_EOL;
    }
}

function vynasob($a, $b)
{
    $a * $b;
}


function zobrazLichacisla(array $cisla)
{
    foreach ($cisla as $cislo) {
        echo $cislo;
        echo PHP_EOL;
    }
}


function deleni(float $a, $b)
{
    return $a / $b;
}

function pozdrav(Clovek $clovek)
{
    echo sprintf('Ahoj, člověku %s', $clovek->jmeno) . PHP_EOL;
}

function skolniPozdrav(Student $student)
{
    echo sprintf('Ahoj, studente %s studující %s', $student->jmeno, $student->obor) . PHP_EOL;
}