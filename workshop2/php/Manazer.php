<?php

class Manazer
{
    public function __construct(private IDownloader $downloader, private IParser $parser)
    {
    }

    public function nactiData(): SeznamZviratek
    {
        $data = $this->downloader->download(__DIR__ . '/../zviratka.csv');
        return $this->parser->process($data);
    }

    public function nejlevnejsiZviratko(SeznamZviratek $zviratka): string
    {
        // Cílem úpravy této metody je použít pouze následující řádek:
        //return $zviratka->najdiNejlevnejsiZviratko()->nazev;


        $nejlevnejsi = null;
        $nazev = '';
        foreach ($zviratka->zviratka as $zviratko) {
            if ($nejlevnejsi === null) {
                $nejlevnejsi = $zviratko[4];
                $nazev = $zviratko[1];
                continue;
            }

            if ($zviratko[4] < $nejlevnejsi) {
                $nejlevnejsi = $zviratko[4];
                $nazev = $zviratko[1];
            }
        }

        var_dump(sprintf('Nejlevnější cena: %d', $nejlevnejsi));
        return $nazev;
    }

    public function najdiZviratkoPodleNazvu(SeznamZviratek $zviratka, string $nazev): Zviratko|null
    {
        return $zviratka->najdiZviratkoPodleNazvu($nazev);
    }
}