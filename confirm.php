<?php require_once('data.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPの中級</title>
    <link rel="stylesheet" href="common/common.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    <div class="order">
      <h2>注文確認画面</h2>
      <?php $totalPayment = 0 ?>
      <?php foreach($menus as $menu):?>
      <?php
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice();
        ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p  class="order-price"><?php echo  $menu->getTotalPrice()?>円</p>
    <?php  endforeach ?>
      <h3>合計金額:<?php echo $totalPayment ?>円</h3>
    </div>
  </body>
</html>
