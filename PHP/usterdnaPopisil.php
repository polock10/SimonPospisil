<?php

// normalni trida ktera dedi predchozi abstraktni tridu
class ustrednaPospisil extends ustrednyPospisil{
    // konstanta ktera se nastavila a uz se nemeni
    const TYPE = 1;

   
    //funkce pro ziskani hodnoty atributu
    public function getNapetiPospisil() {
      return $this->napetiPospisil;
  }
  
//fuknce ktera nastavi hodnotu atributu
   public function setNapetiPospisil($napetiPospisil) {
      $this->napetiPospisil = $napetiPospisil;
  }
}