<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// Tanpa named argument (sesuai posisi)
sayHello("Muhammad", "Adrian", "Mulyawan");
// Hasil: Hello Muhammad Adrian Mulyawan

// Dengan named argument
sayHello(last: "Mulyawan", first: "Muhammad", middle: "Adrian");
// Hasil: Hello Muhammad Adrian Mulyawan

// =================================================================================================

// Function Default Value Argument
// sayHello("Muhammad", "Adrian");
// Hasil: Error, karena argument "Adrian" dianggap $last bukan $middle

sayHello(first: "Adrian", last: "Oliverkhan");
// Hasil: Hello Adrian  Oliverkhan