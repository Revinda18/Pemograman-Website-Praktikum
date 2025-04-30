<?php

function printNumbers($n) {
    // Memastikan n adalah bilangan bulat positif
    if ($n <= 0) {
        echo "Silakan masukkan bilangan bulat positif.<br>";
        return;
    }

    // Perulangan dari 1 hingga n
    for ($i = 1; $i <= $n; $i++) {
        // Cek kondisi
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024<br>";
        } elseif ($i % 5 == 0) {
            echo "2024<br>";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman<br>";
        } elseif ($i % 6 == 0) {
            echo "Website<br>";
        } else {
            echo $i . "<br>";
        }
    }
}

// Contoh penggunaan
$n = 30; // Anda bisa mengganti nilai ini untuk menguji
printNumbers($n);

?>
