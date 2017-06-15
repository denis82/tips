<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *   есть слабое место, если будет необходимо писать логи в базу
 *   прдеться периписывать класс
 *   
 */

class Logger {        
    
    private function saveToFile($message)
    {
        //  сохраняем в файл
    }

    public function log($message) {
        // запись ошибки в логфайл
        $this->saveToFile($message);
    }

}

