<?php

$poket_money = 1000;
$fund_raising = 101;

echo "あなたの所持金は{$poket_money}円です。<br>";

do {
    echo "{$fund_raising}円募金しました。<br>";
    echo "残り残高は{$poket_money}円です。<br>";

    $poket_money -= $fund_raising;
} while ($poket_money >= 0 && $poket_money <= 999);

echo 'あなたはこれ以上募金できません。';
