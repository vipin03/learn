<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    if(!checkVal($x1,0,10000) ||
        !checkVal($x2,0,10000) ||
        !checkVal($v1,1,10000) ||
        !checkVal($v2,1,10000) 
    ){
            
        return "NO";
    }
    
    $x1Pos=$x1;
    $x2Pos=$x2;
    $jumps=0;
    $found="NO";
    //4523 8092 9419 8076
    // while($x1Pos <= 1000000){
    for($i=0;$i<=10000;$i++){
        if($x1Pos!=$x2Pos){
            $x1Pos+=$v1;
            $x2Pos+=$v2;
            $jumps++;
        }else{
            $found="YES";
            break;
        }
    }
    return $found;
}

function checkVal($val,$min,$max){
    
    if($val < $min || $val > $max){
        return false;
    }
    
    return true;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($fptr);
