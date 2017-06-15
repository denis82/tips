<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of supertransformer
 *
 * @author denis
 */
class SuperTransformer implements ICarTransformer, IPlaneTransformer,IShipTransformer{
    
    public function toCar() {
        echo "transfor to car";
    }
    
    public function toPlane() {
        echo "transfor to plane";
    }
    
    public function toShip() {
        echo "transfor to ship";
    }
}
