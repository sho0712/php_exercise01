<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = '私は' . $_POST['age'] . '歳です';
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
        <div>
            <label for="">フォームの課題</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>