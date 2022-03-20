<?php

// > Throw Expression
// 1. Throw adalah sebuah statement.
// 2. Hal ini menyebabkan kadang kita kesulitan menggunakan "throw" dibeberapa tempat yang membutuhkan expression.
// 3. Di PHP 8, sekarang throw adalah sebuah expression, artinya dia memiliki nilai, dan sekarang kita bisa gunakan di tempat-tempat yang memang membutuhkan expression, seperti "ternary operator".
// https://wiki.php.net/rfc/throw_expression

// > Kode: Throw Expression
function sayHolla(?string $name)
{
    if ($name == null) {
        throw new Exception("Tidak Boleh Null");
    }

    echo "Holla $name";
}

function sayHollaExpression(?string $name)
{
    $result = $name != null ? "Holla $name" : throw new Exception("Tidak boleh null!");
    echo $result . PHP_EOL;
}
// sayHollaExpression(null);
# Hasil => PHP Fatal error:  Uncaught Exception: Tidak boleh null!
sayHollaExpression("Adrian");
# Hasil: Holla Adrian