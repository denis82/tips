<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * SLID 
 * D - прицип инверсии зависимостей 
 *
 * @author denis
 */

class LowRankingMale {
    
    public function eat() {
        $wife = new Wife();
        $food = $wife->getFood();
        // ...есть
    }
}
