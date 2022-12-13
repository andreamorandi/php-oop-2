<?php
require_once __DIR__ . "/Product.php";

class Bed extends Product
{
    public function __construct(private String $title, private String $image, private float $price, private array $categories, private String $type, private string $size)
    {
        parent::__construct($title, $image, $price, $categories, $type);
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
