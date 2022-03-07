<?php

require 'functions.php';
require 'Clovek.php';
require 'Student.php';
require 'MojeVypocetniRozhrani.php';
require 'JednoduchyVypocetniModul.php';
require 'SlozityVypocetniModul.php';
require 'Kalkulacka.php';

// Level 1
echo '============LEVEL1=============';
echo PHP_EOL;

echo '==Úkol 1==';
echo PHP_EOL;
$trojuhelnik = [];
$a = '';

for ($i = 0; $i < 5; $i++) {
    $a = 'b';
    for ($j = 0; $j <= $i; $j++) {
        $trojuhelnik[$i][$j] = '*';
    }
}

vytiskniTrojuhelnik($trojuhelnik);

echo '==Úkol 2==';
echo PHP_EOL;

$a = 2;
$b = 3;
$c = vynasob($a, $b);
echo sprintf('Výsledek násobení čísel %s a %s je %s', $a, $b, $c);
echo PHP_EOL;


echo '==Úkol 3==';
echo PHP_EOL;

$cisla = [1, 2, 3, 4, 5, 6, 7, 8, 9];
zobrazLichacisla($cisla);

echo '===============================';
echo PHP_EOL;


// Level 2
echo '============LEVEL2=============';
echo PHP_EOL;
echo '==Úkol 1==';
echo PHP_EOL;

echo deleni(2, 1) . PHP_EOL;
//echo deleni(2,0) . PHP_EOL;
//echo deleni('retezec',3) . PHP_EOL;


echo '===============================';
echo PHP_EOL;

// Level 3
echo '============LEVEL3=============';
echo PHP_EOL;

echo '==Úkol 1==';
echo PHP_EOL;

$clovek = new Clovek('Petr');
$student = new Student('Standa', 'programator');

pozdrav($clovek);
pozdrav($student);

skolniPozdrav($student);
//skolniPozdrav($clovek);

echo '==Úkol 2==';
echo PHP_EOL;

$jednoduchyVypocetniModul = new JednoduchyVypocetniModul();
$kalkulacka = new Kalkulacka($jednoduchyVypocetniModul);

echo $kalkulacka->secti(1, 1) . PHP_EOL;
echo $kalkulacka->odecti(1, 1) . PHP_EOL;

//$slozityVypocetniModul = new SlozityVypocetniModul();
//$kalkulacka = new Kalkulacka($slozityVypocetniModul);
//
//echo $kalkulacka->secti(1, 1) . PHP_EOL;
//echo $kalkulacka->odecti(1, 1) . PHP_EOL;


echo '===============================';
echo PHP_EOL;