<?php
require 'Invozidlo.php';
class Vozidla implements Invozidlo {
    
protected $rychlost;
protected $palivo;
protected $barva;
protected $dvere;
protected $pedal;
protected $okna;
protected $volant;
protected $kola;

/**
 * zobrazuje rychlost
 * @param int $rychlost
 */
function setRychlost($rychlost) {
    $this->rychlost = $rychlost;
}
/**
 * zobrazuje palivo
 * @param int $palivo
 */
function setPalivo($palivo) {
    $this->palivo = $palivo;
}
/**
 * zobrazuje barvu
 * @param string $barva
 */
function setBarva($barva) {
    $this->barva = $barva;
}
/**
 * zobrazuje pocet dveri
 * @param int $dvere
 */
function setDvere($dvere) {
    $this->dvere = $dvere;
}
/**
 * zobrazuje pedaly
 * @param int $pedal
 */
function setPedal($pedal) {
    $this->pedal = $pedal;
}

function setOkna($okna) {
    $this->okna = $okna;
}

function setVolant($volant) {
    $this->volant = $volant;
}

function setKola($kola) {
    $this->kola = $kola;
}

function getRychlost() {
    return $this->rychlost;
}

function getPalivo() {
    return $this->palivo;
}

function getBarva() {
    return $this->barva;
}

function getDvere() {
    return $this->dvere;
}

function getPedal() {
    return $this->pedal;
}

function getOkna() {
    return $this->okna;
}

function getVolant() {
    return $this->volant;
}

function getKola() {
    return $this->kola;
}


}



