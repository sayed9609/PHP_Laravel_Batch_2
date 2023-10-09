<?php

class Product {
    private $id;
    private $name;
    private $price;
    private $formattedPrice;

    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->getFormattedPrice();
    }

    public function getFormattedPrice() {
        $this-> formattedPrice = '$' . number_format($this->price, 2);
    }
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->formattedPrice}\n";
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
