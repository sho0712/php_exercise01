<?php

$score = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <?php if ($err_msg) : ?>
        <h1>点数を入力してください。</h1>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php elseif ($score >= 60 && $score <= 100) : ?>
        <h1>合格です。</h1>
    <?php elseif ($score < 60 && $score >= 0) : ?>
        <h1>不合格です。</h1>
    <?php else : ?>
        <h1>点数を入力してください。</h1>
    <?php endif; ?>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">


    </form>
</body>

</html>