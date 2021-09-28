<?php
//Câu 1
echo ("Câu 1: Xử lý hàm để tính giai thừa của một số <br/>");
function giai_thua($num)
{
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }

    return $fact;
}

$num = 10;
$res = giai_thua($num);

echo ("$num! = $res <br/><br/>");

//Câu 2:
echo ("Câu 2: Xử lý hàm để đảo ngược chuỗi <br/>");
function dao_chuoi($str)
{
    return strrev($str);
}

$str = "1324";
$rev_str = dao_chuoi($str);
echo ("Chuỗi ban đầu <br/> $str <br/>");
echo ("Chuỗi sau khi bị đảo ngược <br/> $rev_str  <br/><br/>");

//Câu 3
echo ("Câu 3: Lấy Username từ địa chỉ email đã cho <br/>");
function get_username($email)
{
    return strstr($email, "@", true);
}
echo ("luuhoanglong@gmail.com <br/>");
echo (get_username("luuhoanglong@gmail.com") . "<br/><br/>");

//Câu 4
echo ("Câu 4: Lấy từ đầu tiên của một câu <br/>");
function get_first_char($str)
{
    $arr_str = explode(" ", $str);

    return $arr_str[0];
}

$str = "Ngày mai phải đi học";
echo ("$str <br/>");
echo (get_first_char($str) . "<br/><br/>");
