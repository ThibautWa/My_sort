<?php

function array_swap(&$array,$swap_a,$swap_b){
    echo "\n";
    list($array[$swap_a],$array[$swap_b]) = array($array[$swap_b],$array[$swap_a]);
 }

function my_sort($array)
{
    $i = 0;

    while($i < count($array) -1)
    {
        //print_r($array);
        if($array[$i] > $array[$i+1])
        {
            array_swap($array, $i, ($i + 1));
            $i = -1;
        }
        $i++;
    }
    print_r($array);
}

$ar = [3,5,1,8,3];
my_sort([3,5,1,8,3]);
