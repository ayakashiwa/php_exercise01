<?php

$score = 20;

if ($score >= 60) {
    echo '合格です';
}else($score >= 30 && $score < 60) {
    echo '追試です';
}else($score <= 30) {
    echo '不合格です';
}
