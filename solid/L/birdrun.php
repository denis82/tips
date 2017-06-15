<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of birdrun
 *
 * @author denis
 */
class BirdRun {
    
    private $bird;
    
    public function __construct(Bird $bird) {
        $this->bird = $bird;
    }
    
    public function run() {
        $flySpeed = $this->bird->fly();
    }
}
