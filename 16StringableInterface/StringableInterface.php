<?php

// > Stringable Interface
// 1. Di PHP 8, sekarang diperkenalkan interface baru bernama "Stringable".
// 2. Jika melakukan override magic function __toString, makan secara otomatis class kita akan implement interface "Stringable"
// 3. Kita tidak perlau melakukannya secara manual, ini sudah disediakan otomatis oleh PHP 8
// https://wiki.php.net/rfc/stringable

// > Kode: Function Argument Stringable
# Function Argument Stringable
function hello(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

# Override toString function
class Person
{
    public function __toString(): string
    {
        return "Person";
    }
}

hello(new Person());
# hasil: Hello Person
