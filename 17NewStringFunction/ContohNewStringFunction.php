<?php

# String Function: str_contains
var_dump(str_contains("Adrian Mulyawan", "Adrian"));
var_dump(str_contains("Adrian Mulyawan", "Budi"));
/*
    Hasil
    bool(true)
    bool(false)
*/

# String Function: str_starts_with
var_dump(str_starts_with("Adrian Mulyawan", "idrian"));
var_dump(str_starts_with("Adrian Mulyawan", "Mandalika"));
var_dump(str_starts_with("Adrian Mulyawan", "Adrian"));
/*
    Hasil
    bool(false)
    bool(false)
    bool(true)
*/

# String Function: str_ends_with
var_dump(str_ends_with("Adrian Mulyawan", "Mulyawan"));
var_dump(str_ends_with("Adrian Mulyawan", "mulyawan"));
/*
    Hasil
    bool(true)
    bool(false)
*/