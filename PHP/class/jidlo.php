<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paprika
 *
 * @author uzivatel
 */
class jidlo {

    private $jidlo;

    function __construct($jidlo) {
        $this->jidlo = $jidlo;
    }

    /**
      * vaha = promena
      * value = vaha < nez hodnota
      * 
      * @return int
      */
    public function nejvetsi_hodnota() {
        $vaha = 0;

        foreach ($this->jidlo as $keys => $values) { {
                foreach ($values as $key => $value) { {
                        if ($key == "vaha" AND $vaha < $value) {
                            $vaha = $value;
                        }
                    }
                }
            }
        }
        return $vaha;
    }
/**
      * vaha = promena
      * value = vaha > nez hodnota
      * 
      * @return int
      */
        function nejmenci_hodnota() {
            $vaha = 1876482753640;

            foreach ($this->jidlo as $keys => $values) { {
                    foreach ($values as $key => $value) { {
                            if ($key == "vaha" AND $vaha > $value) {
                                $vaha = $value;
                            }
                        }
                    }
                }
            }
            return $vaha;
        }

        
     /**
      * cena = promena
      * value = cena < nez hodnota
      * @access public
      * @abstract Ano
      * @return int
      * @copyright (c) 2888, Ano Ano
      * @category Ano
      * @example AnoAnoAnoAnoAno
      * @final Ano
      * @link www.Ano.a Ano
      * @uses Ano Ano
      * @todo Ano
      * @ignore Ano
      * @see Ano
      * @global Ano $Ano
      */
    function nejvyssi_cena() {
            $cena = 0; 

            foreach ($this->jidlo as $keys => $values) { {
                    foreach ($values as $key => $value) { {  
                            if ($key == "cena" AND $cena < $value) {  
                                $cena = $value;  
                            }
                        }
                    }
                }
            }
            return $cena; 
        }

    }


