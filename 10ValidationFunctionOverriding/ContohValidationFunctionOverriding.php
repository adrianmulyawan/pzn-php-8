<?php

# Kode: Validation di Abstract Function Trait
trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleTraitImp
{
    // use SampleTrait;

    // Tidak bisa diubah untuk argument dan return value functionya
    // Jika dipaksa dijalankan akan error
    // public function sampleFunction(int $name): int
    // {
        # Code Here
    // }
}

// =================================================================================================

# Kode: Validation di Function Overriding
class ParentClass
{
    public function method(string $name)
    {

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

// =================================================================================================

# Kode: Private Function Overriding
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