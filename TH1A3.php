<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo '<table border="1">';
echo '<tr>';
echo '<td>Tên khoá học</td>';
echo '</tr>';

// Duyệt mảng $arrs và hiển thị từng phần tử vào các ô trong bảng
foreach ($arrs as $course) {
    echo '<tr>';
    echo '<td>' . $course . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
