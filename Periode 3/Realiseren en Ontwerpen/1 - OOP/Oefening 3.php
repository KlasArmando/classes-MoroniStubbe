<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class Klant
{
    public $name;
    public $age;
    public $code;

    public function __construct($name, $age, $code)
    {
        $this->name = $name;
        $this->age = $age;
        $this->code = $code;
    }
}

$product = new Product("Flesje Water", 0.80);
$klant = new Klant("Hans", 18, 82736491);

?>

<div>
    <ul>
        <li>Name: <?=$product->name?></li>
        <li>Price: €<?php printf("%.2f", $product->price)?></li>
    </ul>
    <ul>
        <li>Name: <?=$klant->name?></li>
        <li>Age: <?=$klant->age?></li>
        <li>Code: <?=$klant->code?></li>
    </ul>
</div>
