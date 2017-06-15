<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Придется создавать заглушки!!!!!!
 *
 * @author denis
 */
class CarTrancformer implements ISuperTransformer {
    
    public function toCar() {
        echo "transfor to car";
    }
    
    public function toPlane() {
        //заглушка
        throw new Exception ("i can't transfor to plane");
    }
    
    public function toShip() {
        //заглушка
        throw new Exception ("i can't transfor to ship");
    }
}
