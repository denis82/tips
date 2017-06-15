<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class FileLogger implements ILogger {        
    
    private function saveToFile($message)
    {
        //  сохраняем в файл
    }
    
    public function log() {
        // запись ошибки в логфайл
        $this->saveToFile($message);
    }

}

