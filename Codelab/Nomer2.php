<?php
$rows = 5; // Jumlah baris

for ($i = $rows; $i >= 1; $i--) {
    // Cetak spasi untuk membuat piramida terpusat
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    
    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    
    echo "<br>";
}
?>
