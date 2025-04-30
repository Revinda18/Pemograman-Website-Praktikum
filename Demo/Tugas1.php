<?php

namespace Inventory;

// Trait untuk menerapkan diskon
trait Discountable {
    public function applyDiscount($percentage) {
        $this->price -= ($this->price * ($percentage / 100));
    }
}

// Kelas abstrak
abstract class Product {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Metode abstrak
    abstract public function getDetails();

    // Magic Method untuk representasi string
    public function __toString() {
        return "{$this->name} - {$this->price}";
    }
}

// Kelas untuk produk elektronik
class Electronics extends Product {
    private $warrantyPeriod;

    public function __construct($name, $price, $warrantyPeriod) {
        parent::__construct($name, $price);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getDetails() {
        return "Electronics: {$this->name}, Price: {$this->price}, Warranty: {$this->warrantyPeriod} years.";
    }
}

// Kelas untuk pakaian
class Clothing extends Product {
    private $size;

    use Discountable; // Menggunakan trait

    public function __construct($name, $price, $size) {
        parent::__construct($name, $price);
        $this->size = $size;
    }

    public function getDetails() {
        return "Clothing: {$this->name}, Price: {$this->price}, Size: {$this->size}.";
    }
}

// Contoh penggunaan
$phone = new Electronics("Smartphone", 500, 2);
$shirt = new Clothing("T-Shirt", 20, "M");

echo $phone->getDetails() . "<br>"; // Gunakan <br> untuk pemisah baris di HTML
echo $shirt->getDetails() . "<br>";

// Menerapkan diskon
$shirt->applyDiscount(10);
echo "After discount: " . $shirt . "<br>";

?>
