  
<?php

// abstraktni trida ktera se neda instancovat a implementuje interface
abstract class ustrednyPospisil implements iustrednyPospisil{
  protected $napetiPospisil; // atribut ktery je pristupny jen ve tride a tridach dedicich
  
  //funkce pro ziskani hodnoty atributu implementovana z interfacu
    function getNapetiPospisil() {
      return $this->napetiPospisil;
  }

  //fuknce ktera nastavi hodnotu atributu implementovana z interfacu
  function setNapetiPospisil($napetiPospisil) {
      $this->napetiPospisil = $napetiPospisil;
  }




}