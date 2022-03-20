<?php

# Allow ::class on objects
class Login
{

}

$login = new Login();

# Mendapatkan nama class dengan $nama_object::class (fitur PHP 8)
var_dump($login::class);

# Menggunakan NAMACLASS::object / get_class($object) (fitur PHP 7)
var_dump(Login::class);
var_dump(get_class($login));