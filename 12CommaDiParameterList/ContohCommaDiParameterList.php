<?php

# Kode: Comma di Argument/Parameter List
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

# Kode: Comma di Array
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