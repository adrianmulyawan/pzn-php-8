<?php

// > Validation Untuk Abstract Function di Trait
// 1. Di PHP 8, sekarang terdapat validasi ketika mengimplementasikan abstract function di class dari trait.
// 2. Di PHP 7, saat kita mengubah seperti parameter dan return valuenya, hal ini tidak menjadi masalah.
// 3. Namun di PHP 8, jika kita mengubah implementasinya dari abstract functionnya, maka otomatis akan error.
// https://wiki.php.net/rfc/abstract_trait_method_validation

// > Kode: Validation di Abstract Function Trait
/*
    trait SampleTrait
    {
        public abstract function sampleFunction(string $name): string;
    }

    class SampleTraitImp
    {
        use SampleTrait;

        // Tidak bisa diubah untuk argument dan return value functionya
        // Jika dipaksa dijalankan akan error
        public function sampleFunction(int $name): int
        {
            
        }
    }
*/

// ==================================================================================================

// > Validation di Function Overriding
// 1. Sebelumnya kita tahu bahwa melakukan override dengan mengebuah signature function haya akan menimbulkan warning.
// 2. Di PHP 8, hal tersebut akan menimbulkan error.
// 3. Sehingga kita tidak bisa lagi mengubah signature dari function yang kita override, seperti mengubah argument atau mengubah return value
// https://wiki.php.net/rfc/lsp_errors

// > Kode: Validation di Function Overriding
/*
    class ParentClass
    {
        public function method(string $name)
        {
            # Code Here
        }
    }

    class ChildClass extends ParentClass
    {
        // Akan error, harus compatible (sama) dengan parent classnya
        // public function method(int $name)
        // {
            # Code Here
        // }
    }
*/

// ==================================================================================================

// > Private Function Overriding
// 1. Di PHP 7, saat kita membuat function, tapi ternyata di parent nya terdapat function dengan nama yang sama, walaupun private, hal itu dianggap overriding.
// 2. Padahal sdah kelas bahwa private function tidak bisa diakses oleh turunannya.
// 3. Di PHP 8, sekarang private function tidak ada hubungannya lagi dengan child classnya, sehingga kita bebas membuat function dengan nama yang sama walaupun di parent ada function private dengan nama yang sama.
// https://wiki.php.net/rfc/inheritance_private_methods

// > Kode: Private Function Overriding
class Manager
{
    private function test(): void
    {

    }
}

class VicePrecident extends Manager
{
    // Tetap bisa berjalan karena private function tidak ada hubungannya
    // Dengan function test() di class turunannya
    public function test(string $name): string
    {
        return "Hello";
    }
}
$vicePrecident = new VicePrecident();
var_dump($vicePrecident->test("wawan"));
# Hasil: string(5) "Hello"