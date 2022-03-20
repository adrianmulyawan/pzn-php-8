<?php

// > Allow Class on Objects
// 1. Di PHP 7, untuk menamndapatkan nama class sebuah object, kita perlu menggunakan "NamaClass:class" atau "get_class($object)".
// 2. Di PHP 8, sekarang kita bisa langsung mengambil nama class dari "$object::class" secara langsung
// https://wiki.php.net/class_name_literal_on_object

// > Kode: Allow ::class on Objects
class Login
{

}

$login = new Login();

# Mendapatkan nama class dengan $nama_object::class (fitur PHP 8)
var_dump($login::class);

# Menggunakan NAMACLASS::object / get_class($object) (fitur PHP 7)
var_dump(Login::class);
var_dump(get_class($login));