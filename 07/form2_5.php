<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$name = ;
    $name = h($_POST['name']);
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];
    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }

    if (empty($err_msgs)) {
        header('Location: confirm.php?item_key=' . $item_key);
        exit;
    }
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
    <h3>個人情報を入力してください</h3>
    <form action="" method="post">
        <?php if ($err_msgs) : ?>
            <h2>エラーメッセージ</h2>
            <ul>
                <?php foreach ($err_msgs as $err_msg) : ?>
                    <li><?= $err_msg ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <label for="name">氏名</label><br>
        <input type="text" name="name" id="name" value="<?= $name ?>"><br>

        <label for="tel">電話番号</label><br>
        <input type="tel" name="tel" id="tel" value="<?= $tel ?>"><br>

        <label for="tel">メールアドレス</label><br>
        <input type="email" name="email" id="email" value="<?= $email ?>"><br>

        <h3>購入するものを選んでください</h3><br>
        <select name="item_key">
            <option value="バッグ">バッグ</option>
            <option value="靴">靴</option>
            <option value="時計">時計</option>
            <option value="ネックレス">ネックレス</option>
            <option value="ピアス">ピアス</option>
        </select>
        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if (empty($err_msg)) : ?>
        <p><?= "氏名: {$name}" ?></p>
        <p><?= "電話番号: {$tel}" ?></p>
        <p><?= "メールアドレス: {$email}" ?></p>
        <p><?= "購入するもの: {$item_key}" ?></p>
    <? endif; ?>
</body>

</html>