<?php
require_once('menu.php');
$juice = new Menu ('JUICE',60000,'juice.jpg');
$curry = new Menu ('CURRY',90000,'curry.jpg');
$coffe = new Menu ('COFFE',30000,'coffe.jpg');
$rice = new Menu ('RICE',12000,'rice.jpg');

$menus = array($juice,$curry,$coffe,$rice);
?>
