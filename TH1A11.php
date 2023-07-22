
<?php
$array11 = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 trong mảng
unset($array11[2]);

// Đảm bảo key của mảng là tuần tự
$array11 = array_values($array11);

// Hiển thị kết quả
print_r($array11);
?>