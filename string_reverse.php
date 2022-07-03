<?php
//reverse string
$str="vipin";
$str2="";
for($i=strlen($str)-1;$i>=0;$i--)
{
    $str2.=$str[$i];
}

echo $str2;
?>
