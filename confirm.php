<?php require_once('data.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <!--metaをあちこちに書かずにまとめる-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>PHPの中級</title>
        <link rel="stylesheet" href="common/common.css">
    </head>
    <body>
        <div class="order">
            <h2>注文確認画面</h2>
            <?php $totalPayment = 0 ?>
            <?php foreach($menus as $menu):?>
                <?php
                    $orderCount = $_POST[$menu->getName()];

                    //空で送られた場合や、数字以外が送られた時に0を代入する
                    if (empty($orderCount) or ! is_numeric($orderCount)) {
                        $orderCount = 0;
                    }

                    $menu -> setOrderCount($orderCount);

                    $totalPayment += $menu -> getTotalPrice();
                ?>
                <p class="order-amount">
                    <?php echo $menu->getName() ?><span>x</span>
                    <?php echo $orderCount ?><span>個</span>
                </p>
                <p  class="order-price"><?php echo  $menu->getTotalPrice()?>円</p>
            <?php  endforeach ?>
            <h3>合計金額:<?php echo $totalPayment ?>円</h3>
        </div>
    </body>
</html>
