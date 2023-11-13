<?php
// Perulangan Do/While
$ulangi = 0; 

do {
    echo" <p>ini adalah perulangan ke-$ulangi</p>"; //Perulangan Do/While melakukan pengulangan 1 kali, 
    $ulangi --;                                     //lalu pengecekan kondisi. kalau while cek kondisi dulu baru melakukan pengulangan.
} while ($ulangi > 0);

?>