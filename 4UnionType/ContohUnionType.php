<?php

# Contoh Union Type Pada Property
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

# Contoh Union Type Pada Parameter/Argument Function
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

# Contoh Union Type Pada Return Value Function
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