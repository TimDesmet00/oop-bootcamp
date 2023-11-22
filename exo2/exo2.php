<?php

class Basket {

    public float $price ;
    public int $quantity;
    
    public function __construct(float $price, int $quantity) {

        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotal() {
        return $this->price * $this->quantity;
    }

    public function getTaxe() {
        return $this->getTotal() * static::taxe;
    }

    public function getTotalTTC() {
        return $this->getTotal() + $this->getTaxe();
    }
}

class fruit extends Basket {

    public ?string $name;
    const taxe = 0.06;
    const sales = 0.5;

    public function __construct(string $name, float $price, int $quantity) {
        parent::__construct($price, $quantity);
        $this-> name = $name;
    }

    public function getTotal() {
        return parent::getTotal() * static::sales;
    }

    public function getTaxe() {
        return parent::getTaxe() * static::sales;
    }

    public function getTotalTTC() {
        return parent::getTotalTTC() * static::sales;
    }

}

class alcool extends Basket {

    public ?string $name;
    const taxe = 0.21;

    public function __construct(string $name, float $price, int $quantity) {
        parent::__construct($price, $quantity);
        $this-> name = $name;
    }

    public function getTotal() {
        return parent::getTotal();
    }

    public function getTaxe() {
        return parent::getTaxe();
    }

    public function getTotalTTC() {
        return parent::getTotalTTC();
    }

}

$banana = new fruit("banana", 1, 6);
$pommes = new fruit("pommes", 1.5, 3);
$vin = new alcool("vin", 10, 2);

$total = $banana->getTotal() + $pommes->getTotal() + $vin->getTotal();
$totalTax = $banana->getTaxe() + $pommes->getTaxe() + $vin->getTaxe();
$totalTTC = $banana->getTotalTTC() + $pommes->getTotalTTC() + $vin->getTotalTTC();

echo "Total: $total<br>";
echo "Total Tax: $totalTax<br>";
echo "Total TTC: $totalTTC<br>";

?>