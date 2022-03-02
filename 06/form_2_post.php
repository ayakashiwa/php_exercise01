<?php
$name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
}

echo '私の名前は、' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . 'です。';
