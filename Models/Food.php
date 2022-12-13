<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public function __construct(private String $title, private String $image, private float $price, private array $categories, private String $type, private int $weight)
    {
        parent::__construct($title, $image, $price, $categories, $type);
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
