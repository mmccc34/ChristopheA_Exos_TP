<?php


require_once __DIR__ . '/vendor/autoload.php';

use Arnaud\Poo\Product;
use Arnaud\Poo\Order;

$computers = new Product('Imac', 999, 30);
$smartphones = new Product('Iphone', 1399, 52);
$keyboard = new Product('Logitech G213', 139, 47);
$earphone = new Product('Airpods', 199, 37);
$mouse = new Product('Logitech UK', 79, 140 );

$order1 = new Order;
$order2 = new Order;

$order1->addProduct($computers, 2);
$order1->addProduct($smartphones, 2);
$order1->addProduct($earphone, 2);

$order2->addProduct($keyboard, 2);
$order2->addProduct($computers, 1);
$order2->addProduct($mouse, 1);







$invoice1 = $order1->displayInvoice();
$invoice2 = $order2->displayInvoice();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>

<body>
<p>
<?php echo $invoice1; ?>
</p>

<p>
<?php echo $invoice2; ?>
</p>

</body>
</html>