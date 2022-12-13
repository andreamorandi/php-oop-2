<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product
{
    public function __construct(private String $title, private String $image, private float $price, private array $categories, private String $type, private string $material)
    {
        parent::__construct($title, $image, $price, $categories, $type);
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
