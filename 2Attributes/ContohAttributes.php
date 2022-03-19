<?php

// Membuat Attribute
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)] // Attribute Target
class NotBlank
{

}

// Membuat Attribute Class
#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    // Tambahkan Attribute Class
    #[Length(min: 4, max: 20)]
    // Menambahkan Attribute di property
    #[NotBlank]
    public ?string $username;
    
    // Tambahkan Attribute Class
    #[Length(min: 8, max: 20)]
    // Menambahkan Attribute di property
    #[NotBlank]
    public ?string $password;
}

// Membaca Attribute Via Reflection(1)
function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();

    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

// Membaca Attribute Via Reflection(2)
function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property {$property->name} is null!");
        }
        if ($property->getValue($object) == null) {
            throw new Exception("Property {$property->name} is null!");
        }
    }
}

// Membuat Attribute Class Instance / validasi length
function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return;
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if ($valueLength < $length->min) {
            throw new Exception("Property $property->name is too short");
        }
        if ($valueLength > $length->min) {
            throw new Exception("Property $property->name is too long");
        }
    }
}

$request = new LoginRequest();
$request->username = "adrian";
$request->password = "as";
validate($request);

// ================================================================================================

// Attribute Target
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
// Artinya: Attribute hanya bisa ditambahkan didalam property dan class
class NotEmpty
{

}

// =================================================================================================