<?php

// > Non Capturing Catches
// 1. Saat terjadi error di PHP, biasanya kita akan menggunakan try-catch
// 2. Lalu dalam carch kita akan mengangkap error dan menyimpannya dalam variable exception.
// 3. Walaupun sebenarnya tidak kita gunakan, kita tetap harus membuat variable exceptionnya.
// 4. Di PHP 8, sekarang kita tidak wajib membuat variable exception jika memang tidak akan menggunakannya
// https://wiki.php.net/rfc/non-capturing_catches

// > Kode: Non-Capturing Catches
function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Invalid string!");       
    }
}

try {
    validate("  ");
} catch (Exception) {
    echo "Invalid!" . PHP_EOL;
}

# Hasil: Invalid