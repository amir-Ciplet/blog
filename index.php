<?php
error_reporting(0);
function array_filler($array,$value){
    for($i = 0 ; $i < strlen($value); $i++){
        $array[$i] = $value[$i];
        echo $array[$i];



    }
}




function approximate_string($value_1, $value_2) {
    $counter_true = 0;
    $counter_false = 0;
    $is_approximate = 0;
    $value_1_array = [];
    $valiue_2_array = [];
    for($i = 0 ; $i < strlen($value_1);$i++ ){
        if(array_filler())

        
        
        
    }



    for($i = 0 ; $i < strlen($value_1);$i++ ){
        if($value_1[$i] == $value_2[$i]){
            $counter_true++;



        }
        else{
            $counter_false++;
        }
        
        
        
    }
    $mathlogic = $counter_true - abs((strlen($value_1) - strlen($value_2)));
    $result_mathlogic = abs($mathlogic-$counter_true);
    if($counter_true >= $result_mathlogic){
        $is_approximate = 1;
    }
    else{
        $is_approximate = 0;
    }

    
    return $is_approximate;

}







function url(){
    

    $domain = $_SERVER["SERVER_PROTOCOL"] . $_SERVER['SERVER_NAME'];
    return $domain;
}


?>