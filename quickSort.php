<?php

function quickSort($arr){
    
    if(count($arr)<=1){
        return $arr;
    }
    
    $pivot = $arr[0];
    $left=[];
    $right=[];
    for($i=1;$i<count($arr);$i++){
        if($arr[$i] < $pivot){
            $left[]=$arr[$i];
        }else{
            $right[]=$arr[$i];
        }
    }
    
    return array_merge(quickSort($left),[$pivot],quickSort($right));
}

print_r(quickSort([12,2,34,3,5,6]));
?>
