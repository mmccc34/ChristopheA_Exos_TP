<?php

namespace Arnaud\Poo;

class Product
{

    private string $name;
    private int $unitPrice;
    private int $stock;

    public function __construct(string $name, int $unitPrice, int $stock)
    {
        $this->name = $name;
        $this->unitPrice = $unitPrice;
        $this->stock = $stock;
    }


    // Ajoute des quantités au stock
    public function addStock(int $quantity)
    {
        $this->stock += $quantity;
    }

    public function lessStock(int $quantity)
    {

        $this->stock -= $quantity;
    }

    /**
     * Get the value of product
     */
    public function getproduct()
    {
        return $this->name;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setproduct($product)
    {
        $this->name = $product;

        return $this;
    }

    /**
     * Get the value of unitPrice
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set the value of unitPrice
     *
     * @return  self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getstock()
    {
    
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setstock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}