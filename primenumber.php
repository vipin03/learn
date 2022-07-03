<?php
for($n=1;$n<=10;$n++){
    $prime=0;
    for($i=2;$i<$n;$i++){
        if($n%$i==0){
            $prime=1;
            break;
        }
    }

    if($prime){
        echo $n." is Not a prime".PHP_EOL;
    }else{
        echo $n." is Prime".PHP_EOL;
    }
}

?>
