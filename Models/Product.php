<?php
require_once __DIR__ . "/Category.php";

class Product
{
    private $title;
    private $image;
    private $price;
    private $categories;
    private $type;

    public function __construct(String $title, String $image, float $price, array $categories, String $type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->categories = $categories;
        $this->type = $type;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategoriesAsIcons()
    {
        $icons = "";
        foreach ($this->categories as $category) {
            if ($category->getName() === "Cani") {
                $icons .= '<i class="fa-solid fa-dog"></i>';
            } else if ($category->getName() === "Gatti") {
                $icons .= '<i class="fa-solid fa-cat"></i>';
            }
        }
        return $icons;
    }

    public function getType()
    {
        return $this->type;
    }
}
