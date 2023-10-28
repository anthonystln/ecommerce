<?php

namespace App\Taxes;

class Detector
{
    protected $seuil;

    public function __construct($seuil)
    {
        $this->seuil = $seuil;
    }

    public function detect(int $amount)
    {
        if ($amount > $this->seuil) {
            return true;
        } else {
            return false;
        }
    }
}
