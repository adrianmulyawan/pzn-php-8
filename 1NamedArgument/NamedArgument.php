<?php

// > Named Argument
// 1. Biasanya saat kita memanggil function, maka kita harus memasukan argument / parameter sesuai dengan posisinya.
// 2. Dengan kemampuan named argument, kita bisa memasukan argument / parameter tanpa harus mengikuti posisinya.
// 3. Namun penggunaan named argument harus disebutkan nama argument atau paremeternya.
// 4. Named argument juga menjadikan kode program mudah dibaca ketika memanggil function yang memiliki argument yang sangat banyak
// Links: https://www.wiki.php.net/rfc/named_params

// > Contoh Named Argument
/*
    function sayHello(string $first, string $middle, string $last): void
    {
        echo "Hello $first $middle $last" . PHP_EOL;
    }

    // Tanpa named argument (sesuai posisi)
    sayHello("Muhammad", "Adrian", "Mulyawan");
    // Hasil: Hello Muhammad Adrian Mulyawan

    // Dengan named argument
    sayHello(last: "Mulyawan", first: "Muhammad", middle: "Adrian");
    // Hasil: Hello Muhammad Adrian Mulyawan
*/

// > Contoh Function Default Value Argument
// Function Default Value Argument
// sayHello("Muhammad", "Adrian");
// Hasil: Error, karena argument "Adrian" dianggap $last bukan $middle

sayHello(first: "Adrian", last: "Oliverkhan");
// Hasil: Hello Adrian  Oliverkhan