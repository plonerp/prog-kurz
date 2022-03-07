<?php

class Student extends Clovek
{
    public function __construct($jmeno, public $obor)
    {
        // zachytny bod
        parent::__construct($jmeno);
        // zachytny bod
    }
}