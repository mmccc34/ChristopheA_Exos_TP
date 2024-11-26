<?php

class Products
{

    private string $product;
    private int $unitPrice;
    private int $stock;

    public function __construct(string $product, int $unitPrice, int $stock)
    {

        $this->product = $product;
        $this->unitPrice = $unitPrice;
        $this->stock = $stock;
    }

    public function addStock($quantity)
    {

        $this->stock += $quantity;
    }

    public function lessStock($quantity)
    {

        $this->stock -= $quantity;
    }

    /**
     * Get the value of product
     */
    public function getproduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setproduct($product)
    {
        $this->product = $product;

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




// La classe doit créer une commande avec le produit, la quatité, le prix, le calcul de la TVA

//Le produit et le prix sont dans la classe Products.

// On doit rajouter 

class Order
{

    private float $TVA = 0.20;
    private array $orderItems;

    public function addItemOrder(Products $product, int $quantity)

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



    // pour afficher une facture j'ai besoin 
    // nom du produit $orderItems,
    // Quantité de $orderItemas,
    // GetUnitPrice()
    // Taux de TVA $TVA
    // TotalHT (TOTAL TTC / 1 - $this->TVA)
    // Total TTC : $TotalTTC


    public function displayInvoice()
    {

        foreach ($this->orderItems as $item) {
            $product = $item['Produit'];
            $quantity = $item['Quantité'];
            $LineTotalHT = $product->getUnitPrice() * $quantity;

            echo ' - ' . $product->getproduct() . ' au prix unitaire de : ' . $product->getUnitPrice() . ' x ' . $quantity . ' soit : ' . $LineTotalHT . ' € HT' . '<br>';
        }
        echo 'Soit un Total TTC de : ' . $this->totalInvoice(). '€' .PHP_EOL;
    }

   


}









$computers = new Products('Imac', 999, 30);
$smartphones = new Products('Iphone', 1399, 52);
$keyboard = new Products('Logitech G213', 139, 47);
$earphone = new Products('Airpods', 199, 37);

$order1 = new order;

$order1->addItemOrder($computers, 2);
$order1->addItemOrder($smartphones, 2);
$order1->addItemOrder($earphone, 2);



$totalInvoice1 = $order1->totalInvoice();

$invoice1 = $order1->displayInvoice();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $invoice1?></p>
</body>
</html>