<?php
//fibonaci
$n1=0;
$n2=1;

$sum=0;
echo $n1.PHP_EOL;
echo $n2.PHP_EOL;
for($i=0;$i<5;$i++){
    
    
    $sum =$n1+$n2;
    echo $sum.PHP_EOL;
    
    $n1=$n2;
    $n2=$sum;
}
?>
