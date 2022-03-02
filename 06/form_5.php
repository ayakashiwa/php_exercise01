<?php

$num1 = '';
$num2 = '';
$num3 = '';

$err_msg = '';

$sum = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num2 = $_POST['num2'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num3 = $_POST['num3'];
}

if (empty($num1 && $num2 && $num3)) {
    $err_msg = '全てに数字を入力してください';
}
if (!empty($num1 && $num2 && $num3)) {
    $sum = $num1 + $num2 + $num3;
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
            <label for="">１つ目の数字</label><br>
            <input type="text" name="num1"><br>
            <label for="">２つ目の数字</label><br>
            <input type="text" name="num2"><br>
            <label for="">３つ目の数字</label><br>
            <input type="text" name="num3"><br>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p>
        <?php echo '合計値は' . htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') . 'です'; ?>
    </p>

</body>

</html>