<?php

class Product
{
    private $name;
    private $price;

    public function __construct($name = '')
    {
        $this->name = $name;
        $this->price = 0;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
