<?php

class add{
    function add($params = 0){
        $params = str_replace('\\','0',$params);
        $params = explode(',',$params);
        $sum = 0;
        $negative = array();
        for($i = 0;$i < count($params);$i++){
            if($params[$i] < 0){
                $negative[] = $params[$i];
            }else{
                $sum += $params[$i];
            }
            
            if(count($negative)){
                $sum = "Error: Negative numbers	(".implode(',',$negative).")not allowed.";
            }
        }
        return $sum;
    }
    
}   
    $arg = isset($argv[2]) ? $argv[2] : 0;
    $obj = new add($arg);
    echo $obj->add($arg);
?>