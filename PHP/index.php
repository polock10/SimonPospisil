<!doctype html>
<html>
    <head>
        <title>Ma prvni stranka by Simon Pospisil</title>
        <meta name="author" content="Pospisil"/>
        <meta name="publisher" content="Pospisil"/>
        <meta name="copyright" content="Pospisil"/>
        <link rel="shortcut icon" href="obrazky/1234">
        <meta name="keywords" content="Vse nej o html"/>
        <link rel="stylesheet" type="text/css" href="css/newcss.css"/>
    </head>
    <body>
        Moje prvni stranka
        <br>
        <hr>
        <br>
        <p style="text-align: center">A nejake dalsi</p>
        <p style="text-align: center">Texty</p>
        <hr>
        <a href ="adresar/soubor.docx">Odkaz </a>
        <p><a href ="http://seznam.cz">Seznam</a></p>
        <h1>Vozidla</h1>
        <h2>Dopravni prostredky</h2>
        <!--komentar ohledne chyb v html-->
        Meze &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ra
        <dl>
            <dt>Prihlaseni</dt>
            <dd>Uzivatelske jmeno</dd>
            <input type="chechbox" name="auto">

        </dl>
        <dl>
            <dt>Prihlaseni</dt>
            <dd>Heslo</dd>
            <input type="chechbox" name="auto">

        </dl>
        <dl>
            <dt>Vyber</dt>
            <dd>Auta</dd>
            <input type="checkbox" name="auto" value="skoda">Skoda
            <input type="checkbox" name="auto" value="tatra">Tatra
            <input type="checkbox" name="auto" value="lada">Lada
            <input type="checkbox" name="auto" value="bmw">BMW
            <input type="checkbox" name="auto" value="audi">Audi
            <input type="checkbox" name="auto" value="ford">Ford
            <input type="checkbox" name="auto" value="ferrari">Ferrari


        </dl>

        <dl>
            <dt>Bydliste</dt>
            <dd>Mesto</dd>
            <input type="radio" name="radio">Praha
            <input type="radio" name="radio">Brno
            <input type="radio" name="radio">Plzen
            <input type="radio" name="radio">Liberec

        </dl>
        <dl>
            <dt>Odeslat</dt>
            <input type="button" name="Potvrdit">Potvrdit
            <input type="submit" name="nevim">

        </dl>
        <dl>
            <dt>Bydliste</dt>
            <dd>Mesto</dd>
            <select name="Mesto">
                <option value="Praha">Praha</option>
                <option value="Plzen">Plzen</option>
                <option value="Brno">Brno</option>
            </select>

        </dl>


        <hr>
        <p class="mezera" style="text-align: center">Mezera</p>
        <div>Modra
            <div>Bila
                <div>T.modra
                    <div>T.modra


                    </div>
                </div>
            </div>
        </div>
        <hr>
        <ul>
            <li><a href="http:/html">Auto</a></li>
            <li><a href="http:/html">Letadlo</a></li>
            <li><a href="http:/html">Lod</a></li>
            <li><a href="http:/html">Vlak</a></li>
        </ul>
        <a href="obrazky/updater.png"><img src="obrazky/updater.png"bourder="0" alt="HTML prirucka"></a>
        <img src="obrazky/1234.png" title="Obrazek lisky" alt="Obrazek nenalezen">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <table class="table1" border="5" wight="50%" cellpadding="4" cellspacing="5">
            <caption class="hlava" border="2" wight="50%">Informace o obchodech</caption>
            <thead class="hlava1">
                <tr>
                    <th colspan="10">
                        Hlavicka
                    </th>
                </tr>
            </thead>
            <tr>


            </tr>

            <tr>
                <td>Druh</td>
                <td>Pocet</td>
                <td>Cena</td>
                <td>Obchod</td>
                <td>Kosiky</td>
                <td>Zakaznici</td>
                <td>Pokladny</td>
                <td>Kod</td>
                <td>Trzba</td>
                <td>Cerstvost</td>

            </tr>
            <tr>
                <td>Chleba</td>
                <td>2</td>
                <td>20</td>
                <td>Penny</td>
                <td>Cervene</td>
                <td>700</td>
                <td>3</td>
                <td>62388</td>
                <td>1 000 000</td>
                <td>MAX</td>

            </tr>
            <tr>
                <td>Rohlik</td>
                <td>6</td>
                <td>1</td>
                <td>Lidl</td>
                <td>Modre</td>
                <td>1000</td>
                <td>8</td>
                <td>86723</td>
                <td>1 500 000</td>
                <td>MIN</td>

            </tr>
            <tr>
                <td>Houska</td>
                <td>5</td>
                <td>3</td>
                <td>Kaufland</td>
                <td>Cervene</td>
                <td>600</td>
                <td>8</td>
                <td>89630</td>
                <td>------</td>
                <td rowspan="3">MAX</td>

            </tr>
            <tr>
                <td>Pizza</td>
                <td>8</td>
                <td>70</td>
                <td>Albert</td>
                <td>Zlute</td>
                <td>200</td>
                <td>3</td>
                <td>72635</td>
                <td>10 000 000</td>


            </tr>
            <tr>
                <td>Hranolky</td>
                <td>1</td>
                <td>35</td>
                <td>Billa</td>
                <td>Zlute</td>
                <td>300</td>
                <td>9</td>
                <td>86532</td>
                <td>600 000</td>


            </tr>
            <tfoot class="paticka">
                <tr>
                    <th colspan="10">
                        Paticka
                    </th>
                </tr>
            </tfoot>
        </table>  

        <?php
        $ovoce = "pomeranc";

        switch ($ovoce) {

            case "pomeranc";
                echo "pomeranc";
                break;

            case "banan";
                echo "banan";
                break;

            case "hruska";
                echo "hruska";
                break;

            case "svestka";
                echo "svestka";
                break;

            default;

                echo "nic tu nefunguje";

                break;
            //**
            // Tady je komentar
            // Tady je dalsi
            // dela to ze to plati a neplati 
        }
        echo "<br>";
        $a = 1;
        $b = 2;
        if ($a == $b) {

            echo "funguje";
        } elseif ($a > $b) {

            if ($a < $b) {
                echo "uz to funguje";
            }
        } else {
            echo "nic se nerovna";
        }
        echo "<br>";
        $radek = 15;
        $sloupec = 15;
        echo "<table border=1>";
        for ($index = 1; $index < $radek + 1; $index++) {
            echo "<tr>";
            for ($index1 = 1; $index1 < $sloupec + 1; $index1++) {
                echo "<td>" . $index . "-" . $index1 . "<td>";
            }
            echo"</tr>";
        }


        echo "</table>";

        $pole = array(1 => "Petr", 2 => "Ondra", 3 => "Pavel");

        var_dump($pole);

        foreach ($pole as $key => $value) {
            echo $key . "-" . $value . "<br>";
        }

        echo "<br>";


        $auta["osobni"]["skoda"]["2"] = "fabia";
        $auta["osobni"]["skoda"]["2"] = "octavia";
        $auta["osobni"]["lada"]["2"] = "niva";
        $auta["nakladni"]["tatra"]["2"] = "815";

        var_dump($auta);

        if (!is_array($auta)) {
            echo"není pole";
        }
        echo "<br>";


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

        $mesice = array(1 => "Leden", 2 => "Unor", 3 => "Brezen", 4 => "Duben", 5 => "Kveten", 6 => "Cerven", 7 => "Cervenec", 8 => "Srpen", 9 => "Zari", 10 => "Rijen", 11 => "Listopad", 12 => "Prosinec",);
        $mesic = 2;
        var_dump($mesice);

        // echo mesic1($mesice, $mesice);
        //    echo mesic2($mesice, $mesice);
        // funkce na zavolani pole mesicu 

        function mesic($mesice, $mesic) {
            return $mesice[$mesic];
            foreach ($mesice as $key => $value)
                ;
            if ($mesice = $key)
                ;



            return $value;
        }

        echo "<br>" . mesic($mesice, 1);
        echo "<br>" . mesic($mesice, 2);
        echo "<br>" . mesic($mesice, 3);
        echo "<br>" . mesic($mesice, 4);
        echo "<br>" . mesic($mesice, 5);
        echo "<br>" . mesic($mesice, 6);
        echo "<br>" . mesic($mesice, 7);
        echo "<br>" . mesic($mesice, 8);
        echo "<br>" . mesic($mesice, 9);
        echo "<br>" . mesic($mesice, 10);
        echo "<br>" . mesic($mesice, 11);
        echo "<br>" . mesic($mesice, 12);



        echo "<br>";
        echo "<br>";

        $zacatek = 200;

        function DPH($cislo) {
            $dph = $cislo / 100 * 21;
            $vysledek = $cislo + $dph;
            return round($vysledek, $preicsion = 2);
        }

        echo DPH($zacatek);



        $dostal = array(10000, 11000, 12000, 3000);
        $dane = 287.665468;
        $zaokrohleno = 2;
        echo "<br>";
        echo "<br>";
        echo "<br>";

        /**
         * 
         * @param int $dostal
         * @param deca $dane
         * @param int $zaokrohleno
         * @return inta
         */
        function penize($dostal, $dane, $zaokrohleno = 12) {

            foreach ($dostal as $value) {

                $vysledek = round($value + $dane, $zaokrohleno);

                if ($vysledek > 9000) {
                    echo "<br>";
                    echo "Bohaty";
                }
                if ($vysledek < 9000) {
                    echo "<br>";
                    return "Bezdomovec";
                }
            }
        }

        echo penize($dostal, $dane, $zaokrohleno);

        echo "<br>";

        /**
         *  $dostal1 = array($dostal);
         *  $dostal = array($dostal);

          function plat($dostal1, $dane, $zaokrohleno = 12) {
          $vysledek1 = ($dostal1 - $dane);

          if ($vysledek1 < 9000) {
          return "Bezdomovec";
          }
          return "Bezdomovec";

          echo "<br>";
         * 
         * 
         *   $vysledek = ($dostal - $dane);
          if ($vysledek > 9000) {
          return "Bohaty";
          }
          return "Bohaty";
          echo "<br>";



          $vysledek = $dostal - $dane;
          return number_format(round($vysledek, $zaokrohleno), $zaokrohleno);
          }

          echo plat($dostal1, $dane);
         */
        

        $a = 5;
        echo"<br>";
        $b = 10;
        echo"<br>";
        $c = "10";
        echo"<br>";
        $d = TRUE;
        echo"<br>";
        $e = 10.54;
        echo"<br>";
        $f = "jnfoiajd";
        echo"<br>";
        $g = array("jablka", "hrusky", "tresne");
        echo"<br>";
        echo $f;
        echo"<br>";
        var_dump($f);
        echo"<br>";
        echo "<br>";
        echo "\\";
        echo "<br>";
        echo "<a href = \"index.php\">neco</a>";
        echo "<br>";
        echo $data = 1;
        echo "<br>";
        echo $data = "string";
        echo "<br>";
        echo $data = 1.12;
        echo "<br>";
        echo $a === $b;
        echo $a == $b;
        echo $a++;
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a && $b;
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a || $b;
        echo var_dump($a == $b);
        echo var_dump($a === $b);
        for ($b = 0; $b < count($a); $b++) {
            
        }
        foreach ($g as $key => $value) {
            
        }
        echo "<br>";
        /**
         * anotace
         * @author uzivatel
         * @abstract 
         * @copyright (c) 20010, John Doe
         * @method type methodName(type $paramName) Description
         * @name $S.R.O
         * @category JOP
         * @package 1
         * @example cesta description
         * @global CZE 
         * @link www.www.www description
         */
        echo "<br>";
        echo "<img src = \"image/updater.png alt=\"text\" \"title = \"text\">";
        echo "<br>";
        const neco = "cokoliv";
        echo "<br>";
        echo $data = TRUE;
        var_dump($data);
        $data = "string";
        var_dump($data);
        echo"<br>";
        echo $a / $b;
        echo"<br>";
        echo $a + $b;
        echo"<br>";
        echo $a * $b;
        echo"<br>";
        echo $a > $b;
        echo"<br>";
        // array- pole 



        /**
         * 
         * @param string $adresa
         * @param array
         * @return string
         */
        /*   $adresa = "266";

          function kontrola($adresa) {
          //udelame z cisla string !!!!
          $string = explode(".", $adresa);

          foreach ($string as $key => $value) {
          //Zda funguje
          if (!is_numeric($value) AND $value > 255) {
          return "Fake IP";
          }
          }
          }

         */



        $adresa = "192.238.1.254";

        function kontrola($adresa) {
            $valid = "IP je OK";
            //rozlozime cislo na pole
            $string = explode(".", $adresa);
            //vyzkousime funkčnost
            foreach ($string as $key => $value) {
                if (!is_numeric($value)) {
                    $valid = "NEplatna IP adresa";
                }
                if ($value > 255) {
                    $valid = "Neplatna IP adresa";
                } else {
                    
                }
            }
            return $valid;
        }

        echo kontrola($adresa);
        echo"<br>";
        echo"<br>";
        echo"<br>";
        
        
         $meno = "simoooi pospisil";

        function jm($meno) {



            if (preg_match('/^[a-zA-Z]{5,20} [a-zA-Z]{5,20}$/', $meno)) {

                return" Přijmuto";
            } else {

                return "Neplatí";
            }
        }

        echo jm($meno);
        

        echo"<br>";
        echo"<br>";
        echo"<br>";
        
        
        $popisne = "18220";

        function cislopopisne($popisne) {



            if (preg_match('/^[0-9]{5}$/', $popisne)) {

                return" Pravé";
            } else {

                return "Neexistuje";
            }
        }

        echo cislopopisne($popisne);
        echo"<br>";
        echo"<br>";
        echo"<br>";
        
        
        
          $cislo = "+420123456789";

        function telef($cislo) {



            if (preg_match('/^\+[0-9]{9,13}$/', $cislo)) {

                return" Existuje";
            } else {

                return "Neexistuje";
            }
        }

        echo telef($cislo);
        
        
        require 'class/jidlo.php';
        
        $data_jidlo [1] ["druh"] = "paprika";
        $data_jidlo [1] ["jakost"] = "90%";
        $data_jidlo [1] ["cena"] = "20";
        $data_jidlo [1] ["obchod"] = "Lidl";
        $data_jidlo [1] ["barva"] = "cervena";
        $data_jidlo [1] ["delka_dopravy"] = "60_dni";
        $data_jidlo [1] ["stari_celkem"] = "100_dni";
        $data_jidlo [1] ["odruda"] = "Panamy";
        $data_jidlo [1] ["vaha"] = "300g";
        $data_jidlo [1] ["trvanlivost"] = "4_dny";
        echo "<br>";
        $data_jidlo [2] ["druh"] = "jahoda";
        $data_jidlo [2] ["jakost"] = "40%";
        $data_jidlo [2] ["cena"] = "40";
        $data_jidlo [2] ["obchod"] = "Penny";
        $data_jidlo [2] ["delka_dopravy"] = "30";
        $data_jidlo [2] ["odruda"] = "Mupa";
        $data_jidlo [2] ["vaha"] = "40";
        $data_jidlo [2] ["stari_celkem"] = "70";
        $data_jidlo [2] ["trvanlivost"] = "4_dny";
        $data_jidlo [2] ["barva"] = "Zelena";
        echo "<br>";
        $data_jidlo [3] ["druh"] = "rohlik";
        $data_jidlo [3] ["jakost"] = "0%";
        $data_jidlo [3] ["cena"] = "10";
        $data_jidlo [3] ["obchod"] = "Penny";
        $data_jidlo [3] ["delka_dopravy"] = "303";
        $data_jidlo [3] ["odruda"] = "CZ";
        $data_jidlo [3] ["vaha"] = "4000";
        $data_jidlo [3] ["stari_celkem"] = "7";
        $data_jidlo [3] ["trvanlivost"] = "0_dny";
        $data_jidlo [3] ["barva"] = "bila";
         echo "<br>";
        $data_jidlo [4] ["druh"] = "ananas";
        $data_jidlo [4] ["jakost"] = "89%";
        $data_jidlo [4] ["cena"] = "1000";
        $data_jidlo [4] ["obchod"] = "Vetve";
        $data_jidlo [4] ["delka_dopravy"] = "23";
        $data_jidlo [4] ["odruda"] = "Pula";
        $data_jidlo [4] ["vaha"] = "2300";
        $data_jidlo [4] ["stari_celkem"] = "2000";
        $data_jidlo [4] ["trvanlivost"] = "90_dny";
        $data_jidlo [4] ["barva"] = "hneda";
        echo "<br>";
        $data_jidlo [5] ["druh"] = "kokos";
        $data_jidlo [5] ["jakost"] = "100%";
        $data_jidlo [5] ["cena"] = "80";
        $data_jidlo [5] ["obchod"] = "neni_skladem";
        $data_jidlo [5] ["delka_dopravy"] = "2";
        $data_jidlo [5] ["odruda"] = "Papaja";
        $data_jidlo [5] ["vaha"] = "400";
        $data_jidlo [5] ["stari_celkem"] = "0";
        $data_jidlo [5] ["trvanlivost"] = "900_dny";
        $data_jidlo [5] ["barva"] = "chlupata";
        echo "<br>";
        $data_jidlo [6] ["druh"] = "mleko";
        $data_jidlo [6] ["jakost"] = "100%";
        $data_jidlo [6] ["cena"] = "1000";
        $data_jidlo [6] ["obchod"] = "vsechny";
        $data_jidlo [6] ["delka_dopravy"] = "50";
        $data_jidlo [6] ["odruda"] = "kunin";
        $data_jidlo [6] ["vaha"] = "100";
        $data_jidlo [6] ["stari_celkem"] = "10";
        $data_jidlo [6] ["trvanlivost"] = "4_dny";
        $data_jidlo [6] ["barva"] = "modra";
        echo "<br>";
        $data_jidlo [7] ["druh"] = "testoviny";
        $data_jidlo [7] ["jakost"] = "1%";
        $data_jidlo [7] ["cena"] = "9999999";
        $data_jidlo [7] ["obchod"] = "Italiery";
        $data_jidlo [7] ["delka_dopravy"] = "8";
        $data_jidlo [7] ["odruda"] = "vajickov";
        $data_jidlo [7] ["vaha"] = "307863";
        $data_jidlo [7] ["stari_celkem"] = "1000";
        $data_jidlo [7] ["trvanlivost"] = "390_dny";
        $data_jidlo [7] ["barva"] = "zluta";
        echo "<br>";
        $data_jidlo [8] ["druh"] = "mouka";
        $data_jidlo [8] ["jakost"] = "99%";
        $data_jidlo [8] ["cena"] = "9679";
        $data_jidlo [8] ["obchod"] = "harambey";
        $data_jidlo [8] ["delka_dopravy"] = "000";
        $data_jidlo [8] ["odruda"] = "mlyn";
        $data_jidlo [8] ["vaha"] = "233";
        $data_jidlo [8] ["stari_celkem"] = "67";
        $data_jidlo [8] ["trvanlivost"] = "90_dny";
        $data_jidlo [8] ["barva"] = "tyrkysova";
        echo "<br>";
        $data_jidlo [9] ["druh"] = "kureci_maso";
        $data_jidlo [9] ["jakost"] = "58%";
        $data_jidlo [9] ["cena"] = "909";
        $data_jidlo [9] ["obchod"] = "harold";
        $data_jidlo [9] ["delka_dopravy"] = "465";
        $data_jidlo [9] ["odruda"] = "hraha";
        $data_jidlo [9] ["vaha"] = "5888";
        $data_jidlo [9] ["stari_celkem"] = "9";
        $data_jidlo [9] ["trvanlivost"] = "3_dny";
        $data_jidlo [9] ["barva"] = "masova";
        echo "<br>";
        $data_jidlo [10] ["druh"] = "veprove_maso";
        $data_jidlo [10] ["jakost"] = "90%";
        $data_jidlo [10] ["cena"] = "90944";
        $data_jidlo [10] ["obchod"] = "perold";
        $data_jidlo [10] ["delka_dopravy"] = "1";
        $data_jidlo [10] ["odruda"] = "Puso";
        $data_jidlo [10] ["vaha"] = "456";
        $data_jidlo [10] ["stari_celkem"] = "1";
        $data_jidlo [10] ["trvanlivost"] = "67_dny";
        $data_jidlo [10] ["barva"] = "masova2";
        
        $jidlo1 = new jidlo($data_jidlo);
        $jidlo2 = new jidlo($data_jidlo);
        
        
        
        var_dump($jidlo1);
        echo $jidlo1->nejvetsi_hodnota();
        echo "<br>";
        echo $jidlo1->nejmenci_hodnota();
        echo "<br>";
        echo $jidlo2->nejvyssi_cena();
        
        
        
        require 'Index2.php';
        
        
        
        
        
        
        ?>







    </body>
</html>