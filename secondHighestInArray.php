<?php

$array =[1,4,56,5,4,3,6,70];

$max = 0;
$secondMax = 0;
foreach($array as $arr){
    if($arr > $max){
        $secondMax = $max;
        $max = $arr;
    }
    
    if($arr > $secondMax && $arr < $max){
       $secondMax = $arr;
    }
}
echo $secondMax;

?>
