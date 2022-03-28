<?php
require 'IParser.php';
require 'MujSpatnyParser.php';
require 'SeznamZviratek.php';
require 'Zviratko.php';
require 'Manazer.php';
require 'IDownloader.php';
require 'FGDownloader.php';
require 'MujSpravnyParser.php';


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testSpatnyParser()
    {
        $parser = new MujSpatnyParser();
        $data = file_get_contents(__DIR__ . '/../zviratka.csv');
        $result = $parser->process($data);
        $this->assertInstanceOf(SeznamZviratek::class, $result);
        $this->assertCount(513, $result->zviratka);
    }


    public function testNejlevnejsiZviratko()
    {
        $downloader = new FGDownloader();
        $parser = new MujSpravnyParser();
        $manazer = new Manazer($downloader, $parser);
        $data = $manazer->nactiData();

        $this->assertInstanceOf(SeznamZviratek::class, $data);
        $this->assertCount(513, $data->zviratka);

        $this->assertEquals('Lemur kata', $manazer->nejlevnejsiZviratko($data));
    }


    public function testNajdiZviratko()
    {
        $downloader = new FGDownloader();
        $parser = new MujSpravnyParser();
        $manazer = new Manazer($downloader, $parser);
        $data = $manazer->nactiData();

        $this->assertInstanceOf(SeznamZviratek::class, $data);
        $this->assertCount(513, $data->zviratka);

        $zviratko = $manazer->najdiZviratkoPodleNazvu($data, 'Lemur kata');
        $this->assertInstanceOf(Zviratko::class, $zviratko);

        $this->assertEquals('Lemur kata', $zviratko->nazev);
        $this->assertEquals(1007, $zviratko->cena);

        $zviratko = $manazer->najdiZviratkoPodleNazvu($data, 'Gaviál indický');
        $this->assertInstanceOf(Zviratko::class, $zviratko);

        $this->assertEquals('Gaviál indický', $zviratko->nazev);
        $this->assertEquals(27149, $zviratko->cena);

        $zviratko = $manazer->najdiZviratkoPodleNazvu($data, 'Neexistující zvířátko');
        $this->assertNull($zviratko);
    }

}
