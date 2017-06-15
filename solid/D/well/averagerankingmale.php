<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * сохраняется жесткая привязанность к классу wife
 * 
 * @author denis
 */

class AverageRankingMale {
    
    private $wife;

    public function __construct(Wife $wife) {
        $this->wife = $wife;
    }
 
    public function eat() {
        $food = $wife->getFood();
        // ...есть
    }
}