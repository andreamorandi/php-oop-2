<?php

class Category
{
    public function __construct(private String $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
