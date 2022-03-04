<?php

$num1 = '';
$num2 = '';
$num3 = '';
$total = '';
$err_msg = '全てに数字を入力してください';

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    if (empty($num1) or empty($num2) or empty($num3)) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $total = $_POST['num1'] + $_POST['num2'] + $_POST['num3'];
    }
    $total = h($total);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <?php if ($err_msg) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="num1">1つめの数字</label><br>
            <input type="number" name="num1" value="<?= $num1 ?>">
        </div>
        <div>
            <label for="num2">2つめの数字</label><br>
            <input type="number" name="num2" value="<?= $num2 ?>">
        </div>
        <div>
            <label for="num3">3つめの数字</label><br>
            <input type="number" name="num3" value="<?= $num3 ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>

        <?php
        if ($num1 && $num2 && $num3) {
            echo "合計値は {$total} です。";
        }
        ?>
    </form>
</body>

</html>