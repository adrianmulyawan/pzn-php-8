<?php

# Menggunakan Switch Statements
$value = "D";
$result = "";

switch ($value) {
    case 'A':
    case 'B':
    case 'C':
        $result = "Anda Lulus!";
        echo $result . PHP_EOL;
        break;
    case 'D':
        $result = "Anda Tidak Lulus!";
        echo $result . PHP_EOL;
        break;
    case 'E':
        $result = "Mungkin Anda Salah Jurusan!";
        echo $result . PHP_EOL;
        break;
    default:
        $result = "Nilai Apa Itu!";
        echo $result . PHP_EOL;
        break;
}
# Hasil: Anda Tidak Lulus!

// ==================================================================================================

# Menggunakan Match Expression
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

# Non Equals Check di Match Expression
$examValue = 65;
$resultExamValue = match(true) {
    $examValue >= 80 => "Anda Mendapat Nilai A!",
    $examValue >= 70 => "Anda Mendapat Nilai B",
    $examValue >= 60 => "Anda Mendapat Nilai C",
    $examValue >= 50 => "Anda Mendapat Nilai D",
    $examValue >= 40 => "Anda Mendapat Nilai E",
    default => "Nilai Tidak jelas"
};

echo $resultExamValue . PHP_EOL;
# Hasil: Anda Mendapat Nilai A!

// ==================================================================================================

# Match Expression dengan Kondisi'
$name = "Mrs. Mandalika";
$resultName = match (true) {
    str_contains($name, "Mr.") => "Hello Mister",
    str_contains($name, "Mrs.") => "Hello Miss",
    default => "Hello Bwang"
};

echo $resultName . PHP_EOL;
# Hasil: Hello Miss