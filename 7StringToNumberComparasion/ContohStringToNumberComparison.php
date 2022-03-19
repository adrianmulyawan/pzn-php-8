<?php

function compare(string|int $value1, string|int $value2)
{
    if (($value1 == $value2) == true) {
        echo "Nilainya adalah true" . PHP_EOL;
    } else {
        echo "Nilainya adalah false" . PHP_EOL;
    }
    
}

compare(value1: 0, value2: "0");
// Hasil: Nilainya adalah true
// String "0" dikonversi ke tipe data string

compare(value1: 0, value2: "0.0");
// Hasil: Nilainya adalah true
// String "0.0" dikonversi ke tipe data string

compare(value1: 0, value2: "foo");
// Hasil: Nilainya adalah false
// string "foo" adalah string (kata) jadi tidak bisa dikonversi

compare(value1: 0, value2: "");
// Hasil: Nilainya adalah false
// string "" adalah string kosong jadi tidak bisa dikonversi

compare(value1: 42, value2: "   42");
// Hasil: Nilainya adalah true
// Karena, pada string "   42" mengandung angka

compare(value1: 42, value2: "42foo");
// Hasil: Nilainya adalah false
// string "42foo" adalah string (kata) jadi tidak bisa dikonversi