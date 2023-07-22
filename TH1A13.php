<?php
$numbers1 = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
  ];
  
  // Lấy ra phần tử đầu tiên và cuối cùng trong mảng
  $firstElement = reset($numbers1);
  $lastElement = end($numbers1);
  
  // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
  $maxValue = max($numbers1);
  $minValue = min($numbers1);
  $sum = array_sum($numbers1);
  
  // Sắp xếp mảng theo chiều tăng, giảm các giá trị
  sort($numbers1);
  $ascendingOrder = $numbers1;
  rsort($numbers1);
  $descendingOrder = $numbers1;
  
  // Sắp xếp mảng theo chiều tăng, giảm các key
  ksort($numbers1);
  $ascendingKeyOrder = $numbers1;
  krsort($numbers1);
  $descendingKeyOrder = $numbers1;
  
  // Hiển thị kết quả
  echo "Phần tử đầu tiên của mảng là: " . $firstElement . "<br>";
  echo "Phần tử cuối cùng của mảng là: " . $lastElement . "<br>";
  echo "Số lớn nhất trong mảng là: " . $maxValue . "<br>";
  echo "Số nhỏ nhất trong mảng là: " . $minValue . "<br>";
  echo "Tổng các giá trị trong mảng là: " . $sum . "<br>";
  
  echo "Mảng được sắp xếp theo chiều tăng các giá trị: <br>";
  print_r($ascendingOrder);
  echo "<br>";
  echo "Mảng được sắp xếp theo chiều giảm các giá trị: <br>";
  print_r($descendingOrder);
  echo "<br>";
  echo "Mảng được sắp xếp theo chiều tăng các key: <br>";
  print_r($ascendingKeyOrder);
  echo "<br>";
  echo "Mảng được sắp xếp theo chiều giảm các key: <br>";
  print_r($descendingKeyOrder);

  ?>