<?php

class add{
    function add($params = 0){
        $params = explode(',',$params);
        $sum = 0;
        for($i = 0;$i < count($params);$i++){
            $sum += $params[$i];
        }
        return $sum;
    }
    
}   
    $arg = isset($argv[2]) ? $argv[2] : 0;
    $obj = new add($arg);
    echo $obj->add($arg);
?>