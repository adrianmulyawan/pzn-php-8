<?php

# Cara Biasa Yang Digunakan (Membuat Properties + Constructor)
// class Product {
    // public string $id;
    // public string $name;
    // public string $price;
    // public string $quantity;

    // Cara Lumrah / Biasa Digunakan Ketika Membuat Constructor
    // public function __construct(string $id, string $name, int $price, int $quantity)
    // {
        // $this->id = $id;
        // $this->name = $name;
        // $this->price = $price;
        // $this->quantity = $quantity;
    // }
// }

# Menggunakan Constructor Property Promotion
class Product {

    public function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $quantity = 0,
        private bool $expensive = false
    )
    {
        
    }
}

# Saat kita instansiasi class-nya menjadi object
$product_one = new Product(id: "1", name: "Nike Air Jordan 1", price: 2500, quantity: 1);
# Otomatis di promote menjadi property
var_dump($product_one);
/*
    object(Product)#1 (5) {              
        ["id"]=>                           
        string(1) "1"                      
        ["name"]=>                         
        string(17) "Nike Air Jordan 1"     
        ["price"]=>                        
        int(2500)                          
        ["quantity"]=>                     
        int(1)                             
        ["expensive":"Product":private]=>  
        bool(false)                        
    }                                    
*/