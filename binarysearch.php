<?php


function binarysearch($array,$value){
    $low = 0;
    $high = count($array)-1;
    
    while($low <= $high){
        echo "+++++++++++++++++++++".PHP_EOL;
        echo $high.PHP_EOL;
        echo $low.PHP_EOL;
        $mid = floor(($low+$high)/2);
        echo $mid.PHP_EOL;
        if($value == $array[$mid]){
            return true;
        }
        
        if($value < $array[$mid]){
            $high = $mid-1;
            echo "moving hight to mid-1 $high".PHP_EOL;
            
        }else{
            $low = $mid+1;
            echo "moving low to mid+1 $low".PHP_EOL;
            
        }
        
    }
    return false;
}

$array=[1,2,5,10,15,58,100,500];

if(binarysearch($array,5)){
    echo "Found";
}else{
    echo "Not Found";
}
?>
