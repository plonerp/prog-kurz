<?php

interface IParser
{
    public function process(string $data): SeznamZviratek;
}