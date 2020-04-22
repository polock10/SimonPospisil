<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of KolaPresenter
 *Formular na mexickou restauraci
 * @author Dancing Rain
 */
class KolaPresenter extends \Nette\Application\UI\Presenter{
   
     public function createComponentKola($name) {
        return new \Kola($this, $name);
    }
 
    
    public function actionSuccess(){
       $params = $this->getRequest();
        $this->template->params = $params->post;
        
    }
}