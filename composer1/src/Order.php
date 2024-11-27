<?php

namespace Arnaud\Poo;

use Exception;



class Order
{
    private static int $lastOrderNumber = 0; // Propriété statique pour suivre le dernier numéro de commande
    private float $TVA = 0.20;
    private array $orderItems;
    private int $orderNumber;


    public function __construct(array $orderItems = [])
    {
        $this->orderItems = $orderItems;

        self::$lastOrderNumber++;
        $this->orderNumber = self::$lastOrderNumber;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function addProduct(Product $product, int $quantity)

    {

        if ($quantity > $product->getstock()) {
            throw new Exception("Pas assez de stock pour le produit {$product->getProduct()} !");
        }
        $product->lessStock($quantity);

        $this->orderItems[] = [

            'Produit' => $product,
            'Quantité' => $quantity,

        ];
    }


    // J'ai besoin du prix unitaire (Products), de la quantité (Order), du tx de TVA (Products)

    public function totalInvoice(): float
    {

        $totalHT = 0;

        foreach ($this->orderItems as $item) {
            $product = $item['Produit'];
            $quantity = $item['Quantité'];
            $totalHT += $product->getUnitPrice() * $quantity;
        }

        $totalTTC = $totalHT * (1 + $this->TVA);

        return $totalTTC;
    }




    public function displayInvoice() 
    {
        $invoiceContent = 'Facture n° : ' . $this->orderNumber .PHP_EOL. '<br>';

        foreach ($this->orderItems as $item) {
            $product = $item['Produit'];
            $quantity = $item['Quantité'];
            $LineTotalHT = $product->getUnitPrice() * $quantity;
        
            
            $invoiceContent .= ' - ' . $product->getproduct() . ' au prix unitaire de : ' . $product->getUnitPrice() . ' € HT ' . ' x ' . $quantity . ' soit : ' . $LineTotalHT . ' € HT' . PHP_EOL.'<br>';
        }
        $invoiceContent .= 'Soit un Total TTC de : ' . $this->totalInvoice() . '€' . PHP_EOL;

        return $invoiceContent;

        
    }
}
