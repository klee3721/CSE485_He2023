<?php
function convertToUpperCase($array) {
  for ($i = 0; $i < count($array); $i++) {
      if (is_string($array[$i])) {
          $array[$i] = strtoupper($array[$i]);
      }
  }
  return $array;
}

$arr11 = ['a', 'b', 'ABC'];
$arr22 = ['1', 'b', 'c', 'd'];
$arr33 = ['a', 0, null, false];

$arr11 = convertToUpperCase($arr11);
$arr22 = convertToUpperCase($arr22);
$arr33 = convertToUpperCase($arr33);

print_r($arr11);
print_r($arr22);
print_r($arr33);
?>