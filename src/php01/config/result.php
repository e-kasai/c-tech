<?php

$your_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
echo "お名前：" . $your_name;
?>

<?php
$your_product = htmlspecialchars($_POST['product'], ENT_QUOTES, 'UTF-8');
echo "ご希望の商品：" . $your_product;
?>

<?php
$your_qty = htmlspecialchars($_POST['qty'], ENT_QUOTES, 'UTF-8');
echo "注文数：" . $your_qty;
?>

