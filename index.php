<?php require_once('data.php'); ?>
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
        <div class="container">
            <h1>Cafe  JIN</h1>
            <form  action="confirm.php" method="post">
                <div class="contents-item">
                    <?php foreach($menus  as $menu):?>
                        <li>
                            <img src="<?php  echo   $menu->getImage(); ?>" class="menu-item">
                            <h3  class="menu-item-2"><?php echo $menu->getName(); ?></h3>
                            <p><?php  echo  $menu->getTaxPrice(); ?><span>(税込)</span></p>
                            <input  type="text"  value="0"  name="<?php echo  $menu->getName(); ?>">
                            <span>個</span>
                        </li>
                    <?php endforeach ?>
                </div>
                <div class="you">
                    <input type="submit" value="注文する">
                </div>
            </form>
        </div>
    </body>
</html>
