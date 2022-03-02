<?php

$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
}

if (empty($age)) {
    $err_msg = '年齢を入力してください。';
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p>
        <?php if (empty($age)) : ?>
            <?= '' ?>
        <?php else : ?>
            <?= "私は{$age}歳です" ?>
        <?php endif; ?>
    </p>

</body>

</html>