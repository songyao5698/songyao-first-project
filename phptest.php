<?php
$file = './songyao.txt';
if(file_exists($file)) {
    $handle = fopen($file, 'r');
    $buffer = 1024;
    $str = fread($handle,$buffer);
    $list = explode("\n",$str);
    $target = $list[0];
    unset($list[0]);
    $list = array_values($list);
    for($i=0;$i<count($list);$i++){
        for($j=$i+1;$j<count($list);$j++){
            if($list[$i]+$list[$j] == $target){
                print_r(array($list[$i],$list[$j]));
            }
        }
    }
}