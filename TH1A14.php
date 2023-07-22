<?php
$array14 = [
    [77, 87],
    [23, 45]
  ];
  $array24 = [
    'giá trị 1', 'giá trị 2'
  ];
  
  $result = array();
  for ($i = 0; $i < count($array14); $i++) {
    $result[$i] = array_merge(array($array24[$i]), $array14[$i]);
  }
  
  print_r($result);
  
?>  