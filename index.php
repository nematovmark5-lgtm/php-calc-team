<?php
echo "Введите два числа через пробел: ";
fscanf(STDIN, "%d %d", $a, $b);

echo $a + $b . " Сумма\n";
echo $a - $b . " Разность\n";


if ($a > $b){
    echo "Первое больше";
} else if ($a === $b){
    echo " Они ровны!";
} else{
    echo " Второе больше";
}

