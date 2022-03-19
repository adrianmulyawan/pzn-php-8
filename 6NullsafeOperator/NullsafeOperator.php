<?php

// > Nullsafe Operator
// 1. PHP sekarang memiliki nullsafe operator seperi di bahasa pemrograman Kotlin dan Typescript.
// 2. Biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinkan nilai null, maka kita akan melakukan pengecekan apakah bbject tsb null atau tidak, jika tidak baru kita akses object tersebut.
// 3. Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter "?", secara otomatis PHP akan melakukan pengecekan null tersebut.
// https://wiki.php.net/rfc/nullsafe_operator

// > Kode: Nullable Class
# Contoh Nullable Class 1
class Address
{
    public ?string $country;
}

# Contoh Nullable Class 2
class User
{
    public ?Address $address;
}

# Manual Null Check
/*
    function getCountry(?User $user): ?string
    {
        if ($user != null) {
            if ($user->address != null) {
                return $user->address->country;
            }
        }
        return null;
    }
    echo getCountry(null) . PHP_EOL;
*/


# Menggunakan Nullsafe Operator
function getCountry(?User $user): ?string
{
    return $user?->address?->country;
}
echo getCountry($user) . PHP_EOL;