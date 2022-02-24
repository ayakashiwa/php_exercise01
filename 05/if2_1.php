<?php

$poket_money = 1000;
$fund_raising = 101;

while($poket_money>=91 ){
    echo "{$fund_raising}円募金しました。".'<br>';
    echo "残り残高は{$poket_money}円です。".'<br>';

$poket_money-=$fund_raising;
}