<?php

// > Attributes
// 1. Attributes adalah menambahkan metadata terhadap kode program yang kita buat.
// 2. Fitur ini adalah fitur yang sangat baru sekali di PHP, dan bisa memungkinkan fitur ini bakal diadopsi sangat banyak oleh framework-framework di PHP di masa yang akan datang.
// 3. Fitur ini jika dibahasa pemrograman seperti Java bernama Annotation, Attributes di C# atau Decorator di Python dan Javascript.
// https://www.php.net/manual/en/language.attributes.php
// https://www.wiki.php.net/rfc/attributes_v2

// > Attributes sebenarnya adalah class biasa (cuma dikasi metadata sebagai Attributes)

// > Membuat Class Attribute
/*  
    #[Attribute]
    class NotBlank
    {

    }
*/

// ==================================================================================================

// > Menggunakan Attribute
// 1. Attribute bisa kita gunakan di berbagai tempat, seperti class, function, method, property, class constant, dan parameter.
// 2. Untuk menggunakan Attribute, kita cukup gunakan tanda "#[Nama_Attribute]" di target yang kita tentukan.

// > Contoh Menggunakan Attribute
/*
    class LoginRequest
    {
        // Menambahkan Attribute di property
        #[NotBlank]
        public string $username;
        
        // Menambahkan Attribute di property
        #[NotBlank]
        public string $password;
    }
*/

// ==================================================================================================

// > Membaca Attributes Via Reflection (1)
/*
    function validate(object $object): void
    {
        $class = new ReflectionClass($object);
        $properties = $class->getProperties();

        foreach ($properties as $property) {
            validateNotBlank($property, $object);
        }
    }
*/

// ==================================================================================================

// > Membaca Attributes Via Reflection (2)
/*
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
*/

// Kode Lengkap
/*
    #[Attribute]
    class NotBlank
    {

    }

    class LoginRequest
    {
        // Menambahkan Attribute di property
        #[NotBlank]
        public ?string $username;
        
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

    $request = new LoginRequest();
    $request->username = "adrian";
    $request->password = null;
    validate($request);
*/

// ==================================================================================================

// > Attribute Target
// 1. Secara default, attribute bisa digunakan di semua target (class, function, method, property, dan lain-lain).
// 2. Jika kita ingin membatasi hanya bisa digunakan di target tertentu, kita bisa tambahkan informasinya ketika membuat class attribute.

// > Contoh Attribute Target
/*
    #[Attribute(Attribute::TARGET_PROPERTY)]
    class NotEmpty
    {

    }
*/
// Artinya: Attribute hanya bisa ditambahkan didalam property

// ==================================================================================================

// > Attribute Class
// 1. Attribute class adalah class biasa, kita bisa menambahkan property, function / method dan constructor jika mau.
// 2. Ini cocok ketika kita butuh menambahkan informasi tambahan di attribute class.

// > Contoh Attribute Class
/*
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
*/

// > Implementasi Attribute Class
/*
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
*/

// =================================================================================================

// Kode Lengkap
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
