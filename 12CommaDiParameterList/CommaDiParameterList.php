<?php

// > Comma Di Parameter List
// 1. Ini adalah salah satu fitur sederhana, tapi bermanfaat.
// 2. Di PHP 8, kita seakrang bisa menambahkan karakter kima di akhir parameter list, seperti ketika memanggil function, membuat array, dan lain-lain.
// https://wiki.php.net/trailing_comma_in_parameter_list
// https://wiki.php.net/trailing_comma_ini_closure_user_list

// > Kode: Comma di Argumen
function sayHi(string $first, string $last): string
{
    return "Hello, $first $last";
}
var_dump(
    sayHi(
        'Adrian',
        'Mulyawan',
    )
);
# Hasil: string(22) "Hello, Adrian Mulyawan"

// > Kode: Comma di Array
$array = [
    'first'  => 'Muhammad',
    'middle' => 'Adrian',
    'last'   => "Mulyawan",
];
var_dump($array);
# Hasil
/*
    array(3) {              
      ["first"]=>           
      string(8) "Muhammad"  
      ["middle"]=>          
      string(6) "Adrian"    
      ["last"]=>            
      string(8) "Mulyawan"  
    }                       
*/