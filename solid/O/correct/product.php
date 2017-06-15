<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *   теперь в конструктор будет получать на всход экземпляр какого-то класса  
 *   который пишет лог туда куда нужно дб, файл, ....
 */

class Product {

    private $logger;
    
    public function __construct(ILogger $logger) {
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

