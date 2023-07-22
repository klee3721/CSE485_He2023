<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
  ];
  
  // Lấy giá trị = 3 mà có key là b
  $value1 = $a['b']['o']['b'];
  
  // Lấy giá trị = 1 mà có key là c
  $value2 = $a['a']['c'];
  
  // Lấy thông tin của phần tử có key là a
  $info = $a['a'];
  
  // Hiển thị kết quả
  echo "Giá trị = " . $value1 . " mà có key là b<br>";
  echo "Giá trị = " . $value2 . " mà có key là c<br>";
  echo "Thông tin của phần tử có key là a:<br>";
  print_r($info);
  ?>