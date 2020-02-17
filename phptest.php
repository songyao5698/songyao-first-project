<?php
$file = './input.txt';
if(file_exists($file)) {
    $handle = fopen($file, 'r');
    $buffer = 1024;
    while(!feof($handle)){//循环读取，直至读取完整个文件
        $str .= fread($handle,$buffer);
    }
    $list = explode("\n",$str);
    $list = array_filter($list);
    $target = $list[0];
    unset($list[0]);
    $list = array_values($list);
    for($i=0;$i<count($list);$i++){
        if($list[$i] > $target) continue;
        for($j=$i+1;$j<count($list);$j++){
            if($list[$j] > $target) continue;
            if($list[$i]+$list[$j] == $target){
                print_r(array($list[$i],$list[$j]));
            }
        }
    }
}