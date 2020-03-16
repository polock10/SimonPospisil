<?php

class neco1 {

    public $OVOCE;

    function setOVOCE($OVOCE) {
        $this->OVOCE = $OVOCE;
    }

    public function neco2($OVOCE) {
        foreach ($OVOCE as $value) {
            echo $value . "<br>";
        }
    }

}
