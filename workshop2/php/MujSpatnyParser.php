<?php

class MujSpatnyParser implements IParser
{

    public function process(string $data): SeznamZviratek
    {
        $radky = explode(PHP_EOL, $data);
        $pole = [];
        foreach ($radky as $radek) {
            $pole[] = str_getcsv($radek, ';');
        }
        array_shift($pole);
        return new SeznamZviratek($pole);
    }
}