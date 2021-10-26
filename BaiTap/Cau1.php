<?php
// 1.	Viết PHP script để lấy thông tin cấu hình và phiên bản của PHP
        echo ("1. Tthông tin cấu hình và phiên bản PHP:  <br/>");
        phpinfo();
        echo ("<br/><br/>");

// 2.	Viết PHP Lấy địa chỉ Client IP trong PHP
    echo ("2. Địa chỉ Client IP trong PHP <br/>");
         if (!empty($_SERVER['HTTP_CLIENT_IP']))     
		  {  
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
		  }  
		//Kiểm tra xem IP có phải là từ Proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
		  {  
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		  }  
		//Kiểm tra xem IP có phải là từ Remote Address  
		else  
		  {  
			$ip_address = $_SERVER['REMOTE_ADDR'];  
		  }  
		echo ("Địa chỉ Client IP là $ip_address <br/>"); 

//3. Viết PHP Lấy URL trong PHP
         echo (" 3. Lấy URL trong PHP <br/>");
         $url = 'https://shopee.vn/';  
		 $url=parse_url($url);  
		 echo 'Scheme : '.$url['scheme']."<br>";  
		 echo 'Host : '.$url['host']."<br>";  
		 echo 'Path : '.$url['path']."<br>";

// 4. Lấy thư mục gốc và hiển thị toàn bộ nội dung cây thư mục
    echo ("4. Lấy thư mục gốc và hiển thị toàn bộ nội dung cây thư mục <br/>");
    $rd = getenv('DOCUMENT_ROOT');
    echo $rd . "<br>";
    $arr_folder = scandir($rd);
    foreach ($arr_folder as $element) {
    echo ("$element <br/>");
    }
  
// 5. Viết PHP script để lấy thời gian file chỉnh sửa lần cuối cùng của trang hiện tại
echo (" 5. Thời gian file chỉnh sửa lần cuối cùng của trang hiện tại <br/>");
        $ten_file_hien_tai = basename($_SERVER['PHP_SELF']);  
		$file_last_modified = filemtime($ten_file_hien_tai);   
		echo "Last modified: " . date("l, dS F, Y, h:ia", $file_last_modified)."<br>";
       ?>