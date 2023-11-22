<?php

class Basket {

    public ?string $name;
    public float$price ;
    public int $quantity;
    public float $taxe;

    public function __construct(string $name, float $price, int $quantity, float $taxe) {
        $this-> name = $name;
        $this-> price = $price;
        $this-> quantity = $quantity;
        $this-> taxe = $taxe;
    }

    public function getTotal() {
        return $this->price * $this->quantity;
    }

    public function getTaxe() {
        return $this->getTotal() * $this->taxe;
    }

    public function getTotalTTC() {
        return $this->getTotal() + $this->getTaxe();
    }
}

$banana = new Basket("banana", 1, 6, 0.06);
$pommes = new Basket("pommes", 1.5, 3, 0.06);
$vin = new Basket("vin", 10, 2, 0.21);

$total = $banana->getTotal() + $pommes->getTotal() + $vin->getTotal();
$totalTax = $banana->getTaxe() + $pommes->getTaxe() + $vin->getTaxe();
$totalTTC = $banana->getTotalTTC() + $pommes->getTotalTTC() + $vin->getTotalTTC();

echo "Total: $total<br>";
echo "Total Tax: $totalTax<br>";
echo "Total TTC: $totalTTC<br>";
?>