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

    private $logger;
    
    public function __construct(Logget $logger) {
        $this->logger = $logger;
    }
    
    public function setPrice($price) 
    {
        try {
            //заспись в базу
        } catch (Exception $e) {
            $this->logger->log($e->getMessage());
        }
    }        
    
}

