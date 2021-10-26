<?php
//Câu 1
echo ("Câu 1: Decode một chuỗi JSON trong PHP <br/>");

$json = '{
        "name": "Long",
        "age": 21,
        "email": "luuhoanglong@gmail.com"
    }';
echo ("Origin: <br/>");
echo ($json);
echo ("<br/>Decoding: <br/>");
var_dump(json_decode($json, true));
echo ("<br/>" . implode("<br/>", json_decode($json, true)) . "<br/><br/>");

//Câu 2
echo ("Câu 2: Lấy biểu diễn dưới dạng JSON của một giá trị trong một mảng <br/>");

$arr = array("name" => "Long", "age" => 21, "email" => "luuhoanglong@gmail.com");
var_dump(json_encode($arr, true));
echo ("<br/>" . json_encode($arr, true) . "<br/><br/>");

//Câu 3
echo ("Câu 3: hiển thị các lỗi trong quá trình decode JSON<br/>");

function json_error_message($json_str)
{
    $json[] = $json_str;
    echo implode(" ", $json);
    foreach ($json as $string) {
        echo '<br/>Decoding: ' . $string . "<br>";
        json_decode($string);

        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                echo ' - No errors' . "<br>";
                break;
            case JSON_ERROR_DEPTH:
                echo ' - Maximum stack depth exceeded' . "<br>";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - Underflow or the modes mismatch' . "<br>";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - Unexpected control character found' . "<br>";
                break;
            case JSON_ERROR_SYNTAX:
                echo ' - Syntax error, malformed JSON' . "<br>";
                break;
            case JSON_ERROR_UTF8:
                echo ' - Malformed UTF-8 characters, possibly incorrectly encoded' . "<br>";
                break;
            default:
                echo ' - Unknown error' . "<br>";
                break;
        }
    }
}
json_error_message($json);
