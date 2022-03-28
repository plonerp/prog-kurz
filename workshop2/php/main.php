<?php
require 'IParser.php';
require 'MujSpatnyParser.php';
require 'SeznamZviratek.php';
require 'Zviratko.php';
require 'IDownloader.php';
require 'FGDownloader.php';
require 'Manazer.php';


$downloader = new FGDownloader();
$parser = new MujSpatnyParser();

$manazer = new Manazer($downloader, $parser);
$zviratka = $manazer->nactiData();

var_dump($manazer->nejlevnejsiZviratko($zviratka));

//odkomentujte po implementaci
//var_dump($manazer->najdiZviratkoPodleNazvu($zviratka, 'Lemur kata'));