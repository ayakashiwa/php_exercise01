<?php

$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
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
            <?= '私は' . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . '歳です' ?>
        <?php endif; ?>
    </p>

</body>

</html>