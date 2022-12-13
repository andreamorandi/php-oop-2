<?php
class ShoppingBasket
{
    private $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function getTotal()
    {
        $prices = array_map(function ($prod) {
            return $prod->getPrice();
        }, $this->products);
        return array_sum($prices);
    }

    public function getProductsList()
    {
        $list = "<ul>";
        foreach ($this->products as $product) {
            $list .= "<li>" . $product->getTitle() . "</li>";
        }
        $list .= "</ul>";
        return $list;
    }
}
