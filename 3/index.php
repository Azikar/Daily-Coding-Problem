<?php


// idea is to try every sum of 2 values in array and to 
// check if k - sum of 2 values exists in array

function get_sum_of_2_values($a, $b){
   
    return $a + $b;
}

function check_if_possible($array, $k)
{
    for($i=0;$i<count($array)-1;$i++){
        for($j=$i+1; $j<count($array);$j++)
        {
            $array2=$array;
            unset($array2[$i]);
            unset($array2[$j]);
            
            if(in_array($k-get_sum_of_2_values($array[$i],$array[$j]),$array2))
                return true;
        }
    }
}
$array=[20, 303, 3, 4, 25];
$k = 49;
if(check_if_possible($array, $k))
    echo "k=$k found </br>";
else echo "k=$k imposible</br>";

$array=[20, 303, 3, 4, 25];
$k = 23;
if(check_if_possible($array, $k))
    echo "k=$k found </br>";
else echo "k=$k imposible</br>";
?>