<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *   не правильно спроектирован класс, он занимается одновременно двумя вещами
 *   записывает цену и ведет логи
 */

class Product {

    function __construct() {
        
    }
    
    public function setPrice($price) 
    {
        try {
            //заспись в базу
        } catch (Exception $e) {
            $this->logError($e->getMessage());
        }
    }        
    
    public function logError($error) {
        // запись ошибки в логфайл
    }

}

