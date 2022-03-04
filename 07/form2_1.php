<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';


// ここにコードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylist'];
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <option hidden>選択してください</option>
            <option value="Takashi">Takashi</option>
            <option value="Ken">Ken</option>
            <option value="Kyoutaro">Kyoutaro</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <?php if (!empty($stylists)) : ?>
        <p><?= htmlspecialchars('あなたの担当は' . $select_stylist . 'です。', ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

</body>

</html>