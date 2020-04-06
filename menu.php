<?php
class  Menu
{

    private $name;
    private $price;
    private $image;
    private $orderCount = 0;

    public function __construct($name, $price, $image)
    {
        $this -> name  = $name;
        $this -> price = $price;
        $this -> image = $image;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getImage()
    {
        return $this -> image;
    }

    public function getTaxPrice()
    {
        return floor($this -> price * 1.08);
    }

    public function setOrderCount($orderCount)
    {
        $this -> orderCount = $orderCount;
    }

    public function getOrderCount()
    {
        return $this -> orderCount;
    }

    public function getTotalPrice() {
        //商品個数と商品個数をかけていたので、消費個数 x 税込値段に変更しました。
        return $this -> getOrderCount() * $this -> getTaxPrice();
    }


    /*極力詰めて書かないように気をつけて
    □ダメな例
    public function getName(){
        return $this->name;
    }

    □一般的な例
    public function getName() {
        return $this -> name;
    }
    */
}
?>
