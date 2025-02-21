<?php
function mayTinh($a, $b, $phepTinh) {
    switch($phepTinh) {
        case 'cộng':
            return $a + $b;
        case 'trừ':
            return $a - $b;
        case 'nhân':
            return $a * $b;
        case 'chia':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Lỗi: Không thể chia cho 0!";
            }
        default:
            return "Lỗi: Phép toán không hợp lệ!";
    }
}
$a = 20;
$b = 30;
$phepTinh = 'nhân';  // Bạn có thể thay đổi thành 'trừ', 'nhân', 'chia'

echo "Kết quả: " . mayTinh($a, $b, $phepTinh);
?>
