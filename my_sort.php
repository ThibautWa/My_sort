<?php

function array_swap(&$array,$swap_a,$swap_b){
    echo "\n";
    list($array[$swap_a],$array[$swap_b]) = array($array[$swap_b],$array[$swap_a]);
 }

 function isTabEmpty($array)
 {
     $isEmpty = true;

     foreach($array as $value)
     {
        if ($value != 0)
            $isEmpty = false;
     }
     return $isEmpty;
 }

 function printTab($array)
 {
     $printableArray = $array;
     foreach($array as $value)
     {
         echo $value;
     }
     echo "\n";
     while (isTabEmpty($printableArray) == false)
     {
        foreach($printableArray as &$value)
        {
            if ($value > 0)
            {
                echo "█";
                $value = $value - 1;
            }
            elseif ($value == 0)
            {
                echo " ";
            }
        }
        echo "\n";
     }
 }

function my_sort($array)
{
    $i = 0;

    while($i < count($array) -1)
    {
        system('clear');
        printTab($array);
        usleep(50000);
        if($array[$i] > $array[$i+1])
        {
            array_swap($array, $i, ($i + 1));
            $i = -1;
        }
        $i++;
    }
}

$ar = [1,2,3,9,5,6,7,8,4];
my_sort($ar);
