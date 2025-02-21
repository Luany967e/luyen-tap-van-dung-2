<?php
function daoNguocChuoi($chuoi) {
   
    return strrev($chuoi);
}


$chuoi = "DangNgocMinhLuan11A7"; 
$chuoiDaoNguoc = daoNguocChuoi($chuoi);

echo "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoiDaoNguoc'";
?>
