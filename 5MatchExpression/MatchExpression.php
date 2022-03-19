<?php

// > Match Expression
// 1. PHP 8 menambahkan struktur kontrol baru dengan nama match expression.
// 2. Match expression adalah struktur kontrol yang mirip dengan switch case, namun lebih baik.
// 3. Match adalah expression, artinya dia bisa mengembalikan value.
// https://wiki.php.net/rfc/match_expression_v2
// https://www.php.net/manual/en/control_structures.match.php

// > Kode: Switch Case Statement
$value = "D";
$result = "";

switch ($value) {
    case 'A':
    case 'B':
    case 'C':
        $result = "Anda Lulus!";
        echo $result;
        break;
    case 'D':
        $result = "Anda Tidak Lulus!";
        echo $result;
        break;
    case 'E':
        $result = "Mungkin Anda Salah Jurusan!";
        echo $result;
        break;
    default:
        $result = "Nilai Apa Itu!";
        echo $result;
        break;
}
# Hasil: Anda Tidak Lulus!

// ==================================================================================================

// > Menggunakan Match Expression
$score = "A";
$resultScore = match($score) {
    "A", "B", "C" => "Anda Lulus!",
              "D" => "Anda Tidak Lulus!",
              "E" => "Mungkin Anda Salah Jurusan",
          default => "Nilai Apa Itu?"
};

echo $resultScore . PHP_EOL;
# Hasil: Anda Lulus!

// ==================================================================================================

// > Non Equals Check di Match Expression
// 1. Selain equals check, berbeda dengan switch case, di match expression, kita bisa melakukan pengecekan kondisi lainnya.
// 2. Misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan booelan expression yang dihasil dari sebuah function

// > Kode: Non Equals Check di Match Expression
$examValue = 80;
$resultExamValue = match(true) {
    $examValue >= 80 => "Anda Mendapat Nilai A!",
    $examValue >= 70 => "Anda Mendapat Nilai B!",
    $examValue >= 60 => "Anda Mendapat Nilai C!",
    $examValue >= 50 => "Anda Mendapat Nilai D!",
    $examValue >= 40 => "Anda Mendapat Nilai E!",
    default => "Nilai Tidak jelas"
};

echo $resultExamValue . PHP_EOL;
# Hasil: Anda Mendapat Nilai A!

// ==================================================================================================

// > Kode: Match Expression dengan Kondisi
$name = "Mrs. Mandalika";
$resultName = match (true) {
    str_contains($name, "Mr.") => "Hello Mister",
    str_contains($name, "Mrs.") => "Hello Miss",
    default => "Hello Bwang"
};

echo $resultName . PHP_EOL;
# Hasil: Hello Miss