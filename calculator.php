<?php

class calculate{
    function add($params = 0){
        $params = explode(',',$params);
        $sum = 0;
        for($i = 0;$i < count($params);$i++){
            if($params[$i] <= 1000){
                $sum += $params[$i];
            }
        }
        return $sum;
    }
    
    function multiply($params){
        $params = explode(',',$params);
        $param1 = isset($params[0]) ? $params[0] : 0;
        $param2 = isset($params[1]) ? $params[1] : 0;
        return $param1*$param2;
    }
    
    
    
}   
    $arg = isset($argv[2]) ? $argv[2] : 0;
    $obj = new calculate($arg);
    echo $obj->multiply($arg);
?>