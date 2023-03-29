<?php
$char="{[({})]}";

$opening=["{","(","["];

$check=[];
$len = strlen($char);
if(($len%2 )!=0){
    echo "Does noT match odd";exit;
}
for($i=0;$i<strlen($char);$i++){
    $closing = is_closing($char[$i],["}",")","]"]);
    if($closing['status']){
        if(end($check) == $opening[$closing['key']]){
            array_pop($check);
        }else{
            echo "Does not match";exit;
        }
    }else{
        $check[]=$char[$i];
    }
}
echo "MAtch";exit;

function is_closing($el,$closing){
    if(in_array($el,$closing)){
        return ["status"=>true,"key"=>array_search($el,$closing,true)];
    }
    return ["status"=>false];
}
?>
