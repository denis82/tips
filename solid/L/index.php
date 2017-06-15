<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();