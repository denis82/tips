<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Класс создан с нарушением принцыпа т.к. при использовании метода
 * fly() ожидается тип int;
 *
 * @author denis
 */
class Penguin extends Bird 
{
    
     public function fly() {
        // die('не могу летать (((('); // НЕ ТИПИЧНОЕ ПОВЕДЕНИЕ
        return 'не могу летать ((((';  // НЕ ТИПИЧНОЕ ПОВЕДЕНИЕ
    }
    
    public function swim() {
        $swimSpeed = 15;
        return $swimSpeed;
    }
}
