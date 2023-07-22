<?php
//bt1:
  function calculate($arrs) {
      // Tính tổng
      $sum = array_sum($arrs);

      // Tính tích
      $product = array_product($arrs);

      // Tính hiệu
      $diff = $arrs[0];
      for ($i = 1; $i < count($arrs); $i++) {
          $diff -= $arrs[$i];
      }

      // Tính thương
      $quotient = $arrs[0];
      for ($i = 1; $i < count($arrs); $i++) {
          $quotient /= $arrs[$i];
      }

      // In kết quả
      echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
      echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
      echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>";
      echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "<br>";
  }

  // Sử dụng hàm
  $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
  calculate($arrs);

