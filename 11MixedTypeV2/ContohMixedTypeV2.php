<?php

# Mixed Type
function testMixed(mixed $param): mixed
{
    if (is_array($param)) {
        return [$param];
    } elseif (is_string($param)) {
        return $param;
    } elseif (is_int($param)) {
        return $param;
    } else {
        return null;
    }
}

var_dump(["Adrian", "Mulyawan"]);
var_dump("Adrian Mulyawan");
var_dump(1);
var_dump(true);

# Hasil
/*
    array(2) {
      [0]=>
      string(6) "Adrian"
      [1]=>
      string(8) "Mulyawan"
    }
    string(15) "Adrian Mulyawan"
    int(1)
    bool(true)
*/