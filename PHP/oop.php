
<?php
include 'iustrednyPospisil.php'; // inkludovani interfejsu
include 'ustrednyPospisil.php'; // inkludovani abs. tridy
include 'ustrednaPospisil.php'; // inkludovani dedici tridy

$napetiPospisil = 24; // atribut podle ktereho nastavime napeti

$newPospisil = new ustrednaPospisil(); // instance tridy ustrednaPopsisil

var_dump($newPospisil::TYPE); // vypsani ve var dump constanty TYPE

$newPospisil->setNapetiPospisil($napetiPospisil);     // nastaveni atributu pomoci instacniho pristupu k fuknci

var_dump($newPospisil->getNapetiPospisil());        // vypsani atributu ve var dump instancnim zpusobem
