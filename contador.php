<?php

$count=$C_COOKIE['count'];
if(isset($count)){
    $count++;
}else{
    $count=0;
}

setcookie('count',$count);
echo $count;