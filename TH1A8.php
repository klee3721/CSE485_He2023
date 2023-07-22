<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Tìm chuỗi có độ dài lớn nhất và nhỏ nhất
$maxLength = 0;
$minLength = PHP_INT_MAX;
$maxString = '';
$minString = '';
foreach ($array as $value) {
    $length = strlen($value);
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $value;
    }
    if ($length < $minLength) {
        $minLength = $length;
        $minString = $value;
    }
}

// Hiển thị kết quả
echo "Chuỗi lớn nhất là " . $maxString . ", độ dài = " . $maxLength . "<br>";
echo "Chuỗi nhỏ nhất là " . $minString . ", độ dài = " . $minLength . "<br>";
?>