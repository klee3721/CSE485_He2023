<?php
function convertToLowerCase($array) {
    for ($i = 0; $i < count($array); $i++) {
        if (is_string($array[$i])) {
            $array[$i] = strtolower($array[$i]);
        }
    }
    return $array;
  }
  
  $arr1 = ['a', 'b', 'ABC'];
  $arr2 = ['1', 'B', 'C', 'E'];
  $arr3 = ['a', 0, null, false];
  
  $arr1 = convertToLowerCase($arr1);
  $arr2 = convertToLowerCase($arr2);
  $arr3 = convertToLowerCase($arr3);
  
  print_r($arr1);
  print_r($arr2);
  print_r($arr3);
  
?>  