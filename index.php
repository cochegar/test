<?php

function func($number)
{
    $ret=5*$number;
    return $ret;
}
 function test($str)
 {
    echo '1';
     echo '2';
     echo '3';

     return $str;
 }
 echo test('test');
echo func(10);
?>