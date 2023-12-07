<?php

namespace App\creation\builder;

class ProductBuilder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function setName(string $name): ProductBuilder
    {
        $this->product->setName($name);
        return $this;
    }

    public function setDescription(string $description): ProductBuilder
    {
        $this->product->setDescription($description);
        return $this;
    }

    public function setPrice(float $price): ProductBuilder
    {
        $this->product->setPrice($price);
        return $this;
    }

    public function get(): Product
    {
        return $this->product;
    }
}
