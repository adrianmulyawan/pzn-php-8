<?php

// > Contoh Mixed Type V2
// 1. Di PHP 7 terdapat type data "mixed", tipe data ini digunakan ketika sebuah argument (parameter) atau return function mengembalikan data yang bisa berbeda-beda.
// 2. Karena tidak bisa menyebutkan tipe data berbeda-beda di PHP 7, maka biasanya ditambahkanlah tipe dara baru bernama mixed.
// 3. Di PHP 8, tipe data mixed di perbaharui, karena di PHP 8 seudah ada Union Type, jadi sekarang tipe data mixed adalah singkatan dari tipe data (array|bool|callable|int|float|null|object|resource|string).
// https://wiki.php.net/rfc/mixed_type_v2

// > Kode: Mixed Type
function testMixed(mixed $param): mixed
{
    if (is_array($param)) {
        return [$param];
    } elseif (is_string($param)) {
        return $param;
    } elseif (is_int($param)) {
        return $param;
    } else {
        return null;
    }
}

var_dump(["Adrian", "Mulyawan"]);
var_dump("Adrian Mulyawan");
var_dump(1);
var_dump(true);

# Hasil
/*
    array(2) {
      [0]=>
      string(6) "Adrian"
      [1]=>
      string(8) "Mulyawan"
    }
    string(15) "Adrian Mulyawan"
    int(1)
    bool(true)
*/