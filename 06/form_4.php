<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$operator = $_GET['operator'];

if ($operator === 'addition') {
    $addition = $num1 + $num2;
    echo "{$num1} + {$num2} = {$addition}";
} elseif ($operator === 'subtraction') {
    $subtraction = $num1 - $num2;
    echo "{$num1} - {$num2} = {$subtraction}";
} elseif ($operator === 'multiplication') {
    $multiplication = $num1 * $num2;
    echo "{$num1} * {$num2} = {$multiplication}";
} elseif ($operator === 'division') {
    $division = $num1 / $num2;
    echo "{$num1} / {$num2} = {$division}";
} else {
    echo '正しい演算子を指定して下さい';
}
