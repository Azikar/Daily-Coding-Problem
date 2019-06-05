<?php

function find_solution($M, $N)
{
    $pairs=[];
    for($a=0;$a<$M/2;$a++)
    {
        $b=$M-$a;
        if($a xor $b == $N)
            $pairs[]=[$a, $b];

    }
    var_dump(count($pairs));
}
find_solution(30, 4);


?>