<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kola
 *
 * @author Dancing Rain
 */
class Kola extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Kola:success'));

        $this->setMethod("POST");

        $this->addText('username', 'Přihlášení')
                ->setRequired('Jmeno lze pouzit')
                ->addRule(self::PATTERN, 'Neni jmeno', '[A-Za-z].*[A-Za-z0-9].*');

        $this->addPassword('password', 'Heslo')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Alespon sest znaku', 6);

        $this->addPassword('password2', 'Heslo znovu')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla se neshoduji', $this['password']);

        $this->addEmail('email', 'Email')
                ->setRequired(' Email poviny')
                ->addRule(\Nette\Forms\Form::EMAIL, ',Adresa neexistuje');
        
        $this->addEmail('email2', 'Potvrzení Emailu')
                ->setRequired('confirm email is needed')
                ->addRule(self::EQUAL, 'Neshoduje se', $this['email']);

        $this->addText('name', 'Jméno')
                ->setRequired('Neplatne')
                ->addRule(self::PATTERN, 'Neni jmeno', '.*[A-Za-z].*');

        $this->addText('number', 'Telefonní číslo')
                ->setRequired('Zavoláme až zboží dorazí')
                ->addRule(\Nette\Forms\Form::PATTERN, 'Není číslo.', '([0-9]){9}');

        $this->addText('address', 'Adresa')
                ->setRequired('Je potřeba adresa kam zboží odeslat')
                ->addRule(self::PATTERN, 'Potřeba adresy', '.*[a-zA-Z]+ [0-9].*');

        $this->addRadioList('time', 'Čas', ['Morning' => 'Ráno', 'Afternoon' => 'Odpoledne', 'Evening' => 'Večer'])
                ->setRequired('Čas dodání zboží')
                ->getSeparatorPrototype()->setName('Time');

        $this->addRadioList('deliverySpeed', 'Rychlost dodání', ['normal' => 'Bežně', 'express' => 'Expresně'])
                ->setRequired('Požadavek na rychlost dadání')
                ->getSeparatorPrototype()->setName('Meal');

        $this->addSelect('barva', 'Barva', ['zluta' => 'Žlutá', 'zelena' => 'Zelená', 'cerna' => 'Černá'])
                ->setRequired('Vyberte si barvu')
                ->setPrompt('Vybrat barvu');

        $this->addSelect('velikostramu', 'Velikost rámu', ['17' => '17', '19' => '19', '21' => '21'])
                ->setRequired('Vyberte si velikost rámu')
                ->setPrompt('Vybrat velikost rámu');

        $this->addSelect('velikostkol', 'Velikost kol', ['26' => '26', '27,5' => '27,5', '29' => '29'])
                ->setRequired('Vyberte si velikost kol')
                ->setPrompt('Vybrat velikost kol');

        $this->addSelect('Odpruzeni', 'Odpružení', ['80' => '80mm', '100' => '100mm', '120' => '120mm'])
                ->setRequired('Vyberte odpružení')
                ->setPrompt('Vybrat odpružení');
        
        $this->addSelect('pedaly', 'Pedály', ['plast'=>'Plastové','zelezne'=>'Železné','slitina'=>'Slitina','naslapy'=>'Nášlapy'])
                ->setRequired('Vyberte Pedály')
                ->setPrompt('Vybrat podály');
        
        $this->addRadioList('platba', 'Platba', ['hotove' => 'Hotově', 'kartou' => 'Kartou'])
                ->setRequired('Způsob platby')
                ->getSeparatorPrototype()->setName('Platba');
                
        $this->addTextArea('message', 'Přípomínky?', 15, 5)
                ->setRequired('Dejte nám vědět')
                ->addRule(self::MAX_LENGTH, 'Moc písmen', 50);

        $this->addUpload('upload', 'Upload')
                ->setRequired('Ukažte nám představu')
                ->addRule(self::IMAGE, 'It\'s not an Image');

        $this->addCheckbox('verification', 'Nejste robot?')
                ->setRequired('Kontrola robota');

        $this->addSubmit('send', 'Odeslat');
    }

}