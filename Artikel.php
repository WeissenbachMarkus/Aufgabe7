<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artikel
 *
 * @author markus
 */
class Artikel
{

    private $arikelnummer, $artikelname, $artikelpreis;

    public function __construct($artikelnummer, $artikelname, $arikelpreis)
    {
        $this->arikelnummer = $artikelnummer;
        $this->artikelname = $artikelname;
        $this->artikelpreis = $arikelpreis;
    }

    function getArtikelname()
    {
        return $this->artikelname;
    }

    function getArtikelpreis()
    {
        return $this->artikelpreis;
    }

    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }

  
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }

}
