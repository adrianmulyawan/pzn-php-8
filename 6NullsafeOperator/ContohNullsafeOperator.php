<?php

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