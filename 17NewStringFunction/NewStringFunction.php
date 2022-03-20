<?php

// > New String Function
// 1. Di PHP 8, terdapat beberapa function untuk memanipulasi string
// https://wiki.php.net/rfc/str_contains
// https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions

// > String Function 1: str_contains
// Function: str_contains($string, $contains): bool
// Deskripsi: Mengecek apakah $string mengandung $contains
// Contoh:
var_dump(str_contains("Adrian Mulyawan", "Adrian"));
var_dump(str_contains("Adrian Mulyawan", "Budi"));
/*
    Hasil
    bool(true)
    bool(false)
*/

// > String Function 1: str_starts_with
// Function: str_starts_with($string, $value): bool
// Deskripsi: Mengecek apakah $string memiliki awal $value
// Contoh:
var_dump(str_starts_with("Adrian Mulyawan", "idrian"));
var_dump(str_starts_with("Adrian Mulyawan", "Mandalika"));
var_dump(str_starts_with("Adrian Mulyawan", "Adrian"));
/*
    Hasil
    bool(false)
    bool(false)
    bool(true)
*/

// > String Function 1: str_ends_with
// Function: str_ends_with($string, $value): bool
// Deskripsi: Mengecek apakah $string memiliki akhir $value
// Contoh:
var_dump(str_ends_with("Adrian Mulyawan", "Mulyawan"));
var_dump(str_ends_with("Adrian Mulyawan", "mulyawan"));
/*
    Hasil
    bool(true)
    bool(false)
*/