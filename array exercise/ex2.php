<?php

    $fruits=array("apple","banana","mango","pineapple","berry");

    $fruits[5] = "kiwi";
    $fruits[6] = "lemon";

    array_splice($fruits,0,1);

    print_r($fruits);
?>