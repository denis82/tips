<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$myArray = array('item1','item2','item3');
echo "<pre>";
print_r($myArray);
echo "</pre>";

$myObject = json_encode($myArray);
echo "<pre>";
var_dump($myObject);
echo "</pre>";

$myObject = json_decode($myObject);
echo "<pre>";
var_dump($myObject);
echo "</pre>";

foreach ($myObject as $key => $item) {
    echo $item . "";
}