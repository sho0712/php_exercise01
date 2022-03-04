<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = '私の名前は' . $_POST['name'] . 'です';
}

?>
<p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
