<?php

// > Constructor Property Promotion
// 1. Kadang kita sering sekali membuat property sekaligus mengisi property tsb menggunakan constructor.
// 2. Sekarang kita bisa otomatis langsung membuat property dengan via constructor.
// Mempromosikan parameter atau argument yang ada di constructor langsung otomatis menjadi sebuah property.
// 3. Fitur ini mirip sekali dibahasa pemrograman seperti Kotlin dan Typescript.
// https://wiki.php.net/rfc/consturctor_promotion

// > Kode: Property dan Constructor
// class Product {
    // public string $id;
    // public string $name;
    // public string $price;
    // public string $quantity;

    # Cara Lumrah / Biasa Digunakan Ketika Membuat Constructor
    // public function __construct(string $id, string $name, int $price, int $quantity)
    // {
        // $this->id = $id;
        // $this->name = $name;
        // $this->price = $price;
        // $this->quantity = $quantity;
    // }
// }

// Ini merupakan hal lumrah yang dilakukan kita buat property + constructor. Tetapi cara ini merupakan hal berulang.

// > Constructor Property Promotion
