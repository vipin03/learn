<?php

$arr = ["lion","tiger","cat","dog"];

$ignore=[];

for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr);$j++){
        
        if($i != $j){
            if(!in_array($arr[$j], $ignore)){
                echo $arr[$i]." ".$arr[$j].PHP_EOL;
            }
        }
        
    }
    $ignore[]=$arr[$i];
    
}
?>
