<?php

# Function Argument Stringable
function hello(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

# Override toString function
class Person
{
    public function __toString(): string
    {
        return "Person";
    }
}

hello(new Person());
# hasil: Hello Person