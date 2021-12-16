<?php
function ratingStar($number)
{
    if ($number >= 0 && $number <= 5) {
        $up = ceil($number);
        $down = floor($number);
        $sub = $number - $down;
        $n = 5 - $up;


        if ($number != 0) {
            foreach (range(1, $down) as $i) {
                echo ('<i class="fa fa-star" style=" margin: 2px;"></i>');
            }

            if ($sub != 0) {
                if ($sub > 0.7) {
                    echo ('<i class="fa fa-star" style=" margin: 2px;"></i>');
                } else {
                    echo ('<i class="fas fa-star-half-alt" style=" margin-left: 2px;" ></i>');
                }
            }
        }
        if ($n != 0) {
            foreach (range(1, $n) as $i) {
                echo ('<i class="far fa-star" style=" margin: 2px;"></i>');
            }
        }
    }
}
