<?php 

// > Union Type (Menambahkan lebih dari 1 tipe data pada properties, argument/parameter, return value)
// 1. PHP adalah bahasa pemrograman yang dynamic.
// 2. Kita tahu sebenarnya saat membuat variable, parameter, argument, return value, sebenarnya di PHP kita tidak wajib menyebutkan tipe datanya, dan PHP bisa berubah-ubah tipe data.
// 3. Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tersebut harus sesuai dengan tipe data yang sudah kita definisikan.
// 4. Di PHP 8, ada fitur yang bernama "Union Types", dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, parameter, atau return value.
// 5. Penggunaan Union Types bisa menggunakan tanpa "|" diikuti dengan tipe data selanjutnya.
// https://wiki.php.net/rfc/union_types_v2

// ==================================================================================================

// > Kode: Union Type di Property
class Example 
{
    # Menambahkan Union Type Pada Property
    public string|int|bool|array $data;
}

# instansiasi class Example
$example = new Example;
$example->data = "Adrian Mulyawan";
$example->data = 25;
$example->data = true;
$example->data = ["Berenang"];
var_dump($example);
# Hasil
/*
    object(Example)#1 (1) {
        ["data"]=>
        array(1) {
            [0]=>
            string(8) "Berenang"
        }
    }
*/

// ==================================================================================================

// > Kode: Union Type di Argument / Parameter
function sampleFunction(string|array $data): void 
{
    if (is_array($data)) {
        echo "Array!" . PHP_EOL;
    } elseif (is_string($data)) {
        echo "String!" . PHP_EOL;
    }
}

sampleFunction("Adrian");
sampleFunction([]);
# Hasil
/*
    String!
    Array!
*/

// ==================================================================================================

// > Union Type di Return Value
function exampleFunction(string|array $data): string|array
{
    if (is_string($data)) {
        return "String";
    } elseif (is_array($data)) {
        return ["Array"];
    }
}

var_dump(exampleFunction("Adrian"));
var_dump(exampleFunction(["Adrian"]));
# Hasil
/*
    string(6) "String"
    array(1) {
        [0]=>
        string(5) "Array"
    }
*/