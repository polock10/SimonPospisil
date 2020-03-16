<?php


require 'class/Vozidla.php';

require 'class/OsobniAuto.php';

$a = new OsobniAuto();
var_dump($a);

$b = new NakladniAuto();
var_dump($b);

$OVOCE = array ("houska","chleba","cokolada");
include "class/neco1.php";
$promena = new neco1();

//var_dump($promena);

$promena->neco2($OVOCE);
$promena->setOVOCE($OVOCE);
var_dump($promena);

include "class/DELL.php";
$disk=5;
$meinKampf = new dellIndustry\DELL();
var_dump($meinKampf);

$meinKampf->disk($disk);
echo 'Chesus';



$message = "Tak tohle je ten text co bude stat za hovno protoze budu delat"
                . "black list oshledne pica zakazanych zmrd co se tu nedaji prdel";

        echo "<br>";
        $BlackList = array("hovno" . "prdel" . "pica" . "zmrd");

//funkce kontrola textu sprostych slov

        function check($message, $BlackList) {
            foreach ($BlackList as $value) {
                if (strpos($message, $value)) {
                    return "Toto slovo smi byt pouzito";
                }
                return TRUE;
            }
        }

        //return "Slova jsou ok";
        
        
        
       
        $jmena ="Jan, Franta Jana; MONIKA Karel-katerina_Vera ,Karel-vera";
        
        $jmena = str_replace([",",";","_","-"]," ", $jmena);
         $jmena = str_replace('  '," ", $jmena);
        
        var_dump($jmena);
        
        $jmena = strtolower($jmena);
        
        var_dump($jmena);
     
        $jmena = explode(" ", $jmena);
     
        var_dump($jmena);
     
     
        foreach ($jmena as $key => $value) {
         $ret[$key]= ucwords($value);
    
}
         
        
        var_dump($ret);
         




