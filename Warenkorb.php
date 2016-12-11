<?php

class Warenkorb
{

    private $summe, $artikelliste;

    public function __construct()
    {
        $this->artikelliste = [];
    }

    function getSumme()
    {
        return $this->summe;
    }

    function addAtikel($artikel)
    {
        $this->artikelliste[] = $artikel;
        $this->summe+=$artikel->getArtikelpreis();
    }

    public function __toString()
    {
        $ausgabe = "<ul>";

        foreach ($this->artikelliste as $artikel)
        {
            $ausgabe.= "<li>".$artikel->getArtikelname()
                    . " -> " . $artikel->getArtikelpreis() . " Euro</li>";
        }

        $ausgabe.="</ul>";

        return $ausgabe;
    }

}
