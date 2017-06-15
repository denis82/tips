<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of restaurant
 *
 * @author denis
 */
class Restaurant implements IFoodProvider{
    
    public function getFood() {
        // ....
        return $food;  // возвращает еду
    }
    
}
