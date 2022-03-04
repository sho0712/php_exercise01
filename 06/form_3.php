<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['age'])) {
        $err_msg = '年齢を入力して下さい。';
    } else {
        $msg = '私は' . $_POST['age'] . '歳です';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの課題</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <?php if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">バリエーションの課題</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>