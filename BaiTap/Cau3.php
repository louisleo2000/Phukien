<?php
//1.	Viết PHP script để hiển thị 1-2-3-4-5-6-7-8-9-…-100 trên một dòng thông qua vòng lặp for, while
    echo ("Câu 1: Hiển thị 1-2-3-4-5-6-7-8-9-…-100  <br/>");
    for($i = 0; $i < 100; $i++)
    {
       echo "Số: " . ($i+1) . "<br>";
     }
//2.	Viết PHP script để hiển thị tổng dãy số nguyên từ 1 đến 200.
    echo ("Câu 2: Hiển thị tổng dãy số nguyên từ 1 đến 200 <br/>");
    $sum = 0;
    for ($i = 1; $i <= 200; $i++) 
    {
     $sum += $i;
    }
    echo ("Tổng các số từ 1 đến 200 là $sum <br/><br/>");

//3. Viết PHP script để hiển thị giai thừa của một số trong PHP
    echo ("Câu 3: Giai thừa của một số trong PHP <br/>");
    $num = 9;
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) 
    {
       $fact = $fact * $i;
    }
    echo ("$num! = $fact <br/><br/>");

//4.	Viết PHP script để hiển thị số lượng một ký tự bất kì trong chuỗi
    echo ("Câu 4: Số lượng một ký tự bất kì trong chuỗi <br/>");
    $string_ten="Hồ Thị Ái Vân Uyên";  
    $ki_tu="h";  
    $count="0";  
    for($x="0"; $x < strlen($string_ten); $x++)  
        {   
             if(substr($string_ten,$x,1) == $ki_tu)  
         {  
            $count = $count+1;  
         }  
         }  
    echo "Có " .$count. " kí tự " .$ki_tu. " trong chuỗi '" .$string_ten. "'";
