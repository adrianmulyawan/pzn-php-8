<?php

// > Just In Time Compilation
// 1. PHP 8 mengenalkan fitur baru yaitu Just In Time Compilation.
// 2. Dimana fitur ini akan mempercepat proses eksekusi program PHP yang kita buat.
// 3. Namun sebelum kita bahasa JIT, kita perlu tahu dulu bagaimana cara kerja PHP menjalankan kode program kita.

// > OPcache 
// 1. Secara default PHP akan selalu membaca kode PHP ketika menjalankan program PHP.
// 2. OPcache digunakan untuk meningkatkan performance PHP, dengan cara menyimpan hasil kompilasi kode PHP di memory.
// 3. Dengan demikian, PHP tidak perlu lagi membaca ulang kode program PHP setiap kali program dijalankan.
// 4. PHP akan langsung membaca dari OPcache yang sudah disimpan di memory.
// 5. Fitur OPcache harus diaktifkan terlebih dahulu, sebelum kita bisa menggunakannya.
// https://www.php.net/manual/en/book.opcache.php

// > Just In Time Compilation
// 1. OPcache akan membuat kode program kita terhidar dari harus melakukan tokenize, parsing, dan compile lagi secara terus menerus tiap request.
// 2. JIT, akan membuat hasil kompilasi kita tidak perlu diterjemahkan oleh virtual machine PHP, melainkan langsung dijalankan oleh machine.
// 3. JIT di PHP menggunakan library bahasa pemrograman C bernama DynASM, oleh karena itu JIT bsa mentranslate hasil complie OPcodes ke instruksi machine.