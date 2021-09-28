<?php
//Câu 1
echo ("Câu 1: Xử lý một class để hiện thị chuỗi 'Class đã được khởi tạo' <br/>");

class show
{
    public function _print()
    {
        echo ("Class đã được tạo");
        echo ("<br/><br/>");
    }
}

$show_class = new show;
$show_class->_print();

//Câu 2
echo ("Câu 2: Xử lý một class có chứa một thuộc tính và tham số <br/>");

class bmi
{
    public $weight;
    public $height;
    public $bmi;

    public function cal_bmi($w, $h)
    {
        $this->weight = $w;
        $this->height = $h;
        $this->bmi = round($this->weight / (($this->height / 100) * 2), 1);
    }

    public function print_bmi()
    {
        echo ("Bạn cao $this->height cm <br/>");
        echo ("Bạn nặng $this->weight kg <br/>");
        echo ("BMI của bạn là $this->bmi <br/><br/>");
    }
}

$user_bmi = new bmi;
$user_bmi->cal_bmi(80, 179);
$user_bmi->print_bmi();

//Câu 3
echo ("Câu 3: Xử lý một class để tính giai thừa của một số <br/>");

class fact
{
    public function cal_fact($num)
    {
        $fact = 1;
        for ($i = 1; $i <= $num; $i++) {
            $fact = $fact * $i;
        }

        return $fact;
    }
}

$calculate = new fact;
$num = 6;
$res = $calculate->cal_fact($num);

echo ("$num! = $res <br/><br/>");

//Câu 4
echo ("Câu 4: Xử lý một class để sắp xếp một mảng số nguyên <br/>");

class arr_sort
{
    public function _sort($arr)
    {
        sort($arr);
        echo ("Mảng sắp xếp tăng dần: <br/>");
        echo ("[");
        for ($i = 0; $i < count($arr); $i++) {
            if ($i != count($arr) - 1) {
                echo ($arr[$i] . ", ");
            } else {
                echo ($arr[$i]);
            }
        }
        echo ("] <br/><br/>");
    }
}

$arr_num = array(1, 3, 6, 9, 14, 23, 7, 33, 12, 25, 58, 64, 21, 78, 2);
echo ("Mảng ban đầu:<br/>");
//In mảng
echo ("[");
for ($i = 0; $i < count($arr_num); $i++) {
    if ($i != count($arr_num) - 1) {
        echo ($arr_num[$i] . ", ");
    } else {
        echo ($arr_num[$i]);
    }
}
echo ("] <br/>");

$arr = new arr_sort;
$arr->_sort($arr_num);

//Câu 5
echo ("Câu 5: Xử lý một class để cộng, trừ, nhân hoặc chia hai giá trị<br/>");

class tinh_toan
{
    public $num1;
    public $num2;

    public function cong()
    {
        $res = $this->num1 + $this->num2;

        return $res;
    }

    public function tru()
    {
        $res = $this->num1 - $this->num2;

        return $res;
    }

    public function nhan()
    {
        $res = $this->num1 * $this->num2;

        return $res;
    }

    public function chia()
    {
        if ($this->num2 == 0) {
            echo ("Không thể chia cho 0.");
        } else {
            $res = round($this->num1 / $this->num2, 2);
        }

        return $res;
    }
}

$tinh = new tinh_toan;
$tinh->num1 = 12;
$tinh->num2 = 5;

echo ("Tổng 2 số $tinh->num1 và $tinh->num2 là " . $tinh->cong() . "<br/>");
echo ("Tổng 2 số $tinh->num1 và $tinh->num2 là " . $tinh->tru() . "<br/>");
echo ("Tổng 2 số $tinh->num1 và $tinh->num2 là " . $tinh->nhan() . "<br/>");
echo ("Tổng 2 số $tinh->num1 và $tinh->num2 là " . $tinh->chia() . "<br/>");
