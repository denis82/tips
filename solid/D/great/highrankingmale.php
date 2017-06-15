<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * позволяет принимать на входе любой объект реализующий интерфейс
 * IFoodProvider,зависимость от абстракции является выигрышной
 *
 * @author denis
 */

class HighRankingMale {
    
    private $footProvider;

    public function __construct(IFoodProvider $foodProvider) {
        $this->foodProvider = $foodProvider;
    }
 
    public function eat() {
        $food = $this->foodProvider->getFood();
        // ...есть
    }
}