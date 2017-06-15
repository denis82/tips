<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Duck
 *
 * @author denis
 */
class Duck extends Bird
{
     
    public function fly() {
        $flySpeed = 8;
        return $flySpeed;
    }
    
    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}
