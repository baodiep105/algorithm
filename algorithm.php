<?php
function miniMaxSum($arr=[]){
    sort($arr);
    $min=$arr[0]+$arr[1]+$arr[2]+$arr[3];
    $max=$arr[1]+$arr[2]+$arr[3]+$arr[4];
    echo $min." ".$max;
}

$arr=[1,2,3,5,4];
miniMaxSum($arr);