<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$logger = new DbLogger();
$product = new Product($logger);
$product->setProduct(10);

