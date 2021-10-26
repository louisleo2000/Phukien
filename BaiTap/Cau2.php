<?php
//1.	Viết PHP script để tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô trên danh sách. Dữ liệu được khai báo trực tiếp trong file.
    echo ("1. Tên các quốc gia và thủ đô.<br/>");
    $mang_lien_hop = array( "Italy"=>"Rome", "Việt Nam"=>"Hà Nội",  "Belgium"=> "Brussels",  "Poland"=>"Warsaw");  
    asort($mang_lien_hop); 
    foreach($mang_lien_hop as $country => $capital)  
    {  
         echo "Thủ đô của $country là $capital"."<br>" ;  
    } 

//2.	Viết PHP script để tìm giá trị trung bình của các phần tử mảng và hiển thị 5 phần tử nhỏ nhất và lớn nhất. Dữ liệu được khai báo trực tiếp trong file.
    echo ("2. Giá trị trung bình của các phần tử mảng và 5 phần tử nhỏ nhất, lớn nhất. <br/>");
    $arr_num = array(1, 4, 88, 9, 5, 23, 7, 33, 42, 25, 68, 64, 99, 78, 2);
    $sum = 0;
    //In mảng
    echo ("[");
    for ($i = 0; $i < count($arr_num); $i++) {
        if ($i != count($arr_num) - 1)
          {
             echo ($arr_num[$i] . ", ");
            } 
        else 
        {
        echo ($arr_num[$i]);
          }
      }
    echo ("] <br/>");

    //Tìm trung bình cộng của mảng
    foreach ($arr_num as $num) 
    {
       $sum += $num;
    }
      echo ("Trung bình cộng của mảng là: " . $sum / count($arr_num) . "<br/>");

    //Tìm 5 giá trị nhỏ nhất
    sort($arr_num);
    echo ("5 phần tử nhỏ nhất trong mảng là: <br/>");
    echo ("[");
    for ($i = 0; $i < 5; $i++) 
    {
         if ($i != 4)
          {
             echo ($arr_num[$i] . ", ");
           } 
         else
          {
             echo ($arr_num[$i]);
          }
}
echo ("] <br/>");

//Tìm 5 giá trị lớn nhất
        rsort($arr_num);
        echo ("5 phần tử lớn nhất trong mảng là: <br/>");
        echo ("[");
        for ($i = 0; $i < 5; $i++) {
            if ($i != 4) {
                echo ($arr_num[$i] . ", ");
            } else {
                echo ($arr_num[$i]);
            }
        }
        echo ("] <br/><br/>");
       
//3.	Viết PHP script để hiện thi văn bản Chuyển đổi mảng thành chữ hoa - chữ thường và ngược lại thông qua button html
    echo ("3. Chuyển đổi mảng chữ hoa - chữ thường và ngược lại thông qua button html <br/>");
    $arr = ["Ái Uyên", "Hải Thu", "Long Lưu", "Thanh Huy", "Quỳnh Hương"];
    $upper_case = false;
    echo ("[");
    for ($i = 0; $i < count($arr); $i++) {
        if ($i != count($arr) - 1) {
            echo ($arr[$i] . ", ");
        } else {
            echo ($arr[$i]);
        }
    }
    echo ("] <br/>");
    ?>
    <form method="post">
        <input type="submit" name="hoa">
        <?php
        if (isset($_POST["hoa"])) {
            if ($upper_case == false) {
                echo ("[");
                for (
                    $i = 0;
                    $i < count($arr);
                    $i++
                ) {
                    if (
                        $i != count($arr) - 1
                    ) {
                        echo (strtoupper($arr[$i]) . ", ");
                    } else {
                        echo (strtoupper($arr[$i]));
                    }
                }
                echo ("] <br/>");
                $upper_case = true;
            } else {
                echo ("[");
                for (
                    $i = 0;
                    $i < count($arr);
                    $i++
                ) {
                    if (
                        $i != count($arr) - 1
                    ) {
                        echo (strtoupper($arr[$i]) . ", ");
                    } else {
                        echo (strtoupper($arr[$i]));
                    }
                }
                echo ("] <br/>");
                $upper_case = false;
            }
        }
        ?>
    </form>

