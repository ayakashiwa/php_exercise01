<?php

$score_math = 30;
$score_english = 22;

if($score_math >= 60 && $score_english >= 60) {
    echo '合格';
}else($score_math >= 50 || $score_english >= 50) {
    echo '再試験';
}else($score_math <= 50 && $score_english <= 50) {
    echo '不合格';
}
