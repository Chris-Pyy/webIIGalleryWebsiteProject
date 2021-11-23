<?php 


function findArrayElement($key, $arr, $identifier) {
    
    $index = [];




    foreach ($arr as $item) {
        if ($item[$identifier] == $key) {
            $index[] = array_search($item, $arr);
        }
    }

    return $index;

}