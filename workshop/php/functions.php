<?php

function vytiskniTrojuhelnik(array $pyramida): void
{
    foreach ($pyramida as $radek) {
        foreach ($radek as $sloupec) {
            echo '[' . $sloupec . ']';
        }
        echo "\r\n";
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
        echo "\r\n";
    }
}


function deleni(float $a, $b)
{
    return $a / $b;
}

function pozdrav(Clovek $clovek)
{
    echo sprintf('Ahoj, člověku %s', $clovek->jmeno) . "\r\n";
}

function skolniPozdrav(Student $student)
{
    echo sprintf('Ahoj, studente %s studující %s', $student->jmeno, $student->obor) . "\r\n";
}