<?php

$num = 4;

for ($i = 2; $i <= $num - 1; $i++) {
    if ($num % $num == 0) {
        echo "{$num}は素数です。";
    } else {
        echo "{$num}は素数ではありません。";
    }
}
