<?php

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