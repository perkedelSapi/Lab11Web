<?php
include "config.php";
include "class/Database.php";
include "class/Form.php";

session_start();

// Ambil path dari URL
// Contoh: /artikel/tambah → artikel/tambah
$path = $_SERVER['PATH_INFO'] ?? '/artikel/index';

// Pisah URL berdasarkan /
$segments = explode('/', trim($path, '/'));

// Tentukan modul & halaman
$mod  = $segments[0] ?? 'artikel';
$page = $segments[1] ?? 'index';

// File target
$file = "module/{$mod}/{$page}.php";

// Load template
include "template/header.php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3 style='color:red'>Modul tidak ditemukan: {$mod}/{$page}</h3>";
}

include "template/footer.php";
?>
