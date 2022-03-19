<?php

// > String to Number Comparison
// 1. Salah satu yang membingungkan di PHP adalah ketika kita melakukan perbandingan number dan string.
// 2. Misal saat kita bandingkan (0 == "eko"), maka hasilnya adalah true.
// 3. Kenapa true? karena PHP akan melaukan type jugling dan mengubah "eko" menjadi "0", sehingga hasilnya "true".
// 4. Di PHP 8, khusus perbandingan String ke Number diubah, agar tidak membingungkan.
// https://wiki.php.net/rfc/string_to_number_comparison

// > String to Number Comparison di PHP 8
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