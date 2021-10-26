<?php
function Tong5so($so1, $so2, $so3, $so4, $so5)
{
    $tong = $so1 + $so2 + $so3 + $so4 + $so5;
    echo ("Tổng 5 số $so1, $so2, $so3, $so4, $so5 = $tong");
}
function Tong4so($so1, $so2, $so3, $so4)
{
    $tong = $so1 + $so2 + $so3 + $so4;
    echo ("Tổng 4 số $so1, $so2, $so3, $so4 = $tong <br/>");
}
function tong2so($so1, $so2)
{
    $tong = $so1 + $so2; 
    echo ("Tổng 2 số $so1 và $so2 = $tong <br/>");
}
Tong2so(1, 2);
Tong4so(1, 2, 3, 4);
Tong5so(1, 2, 3, 4, 5);