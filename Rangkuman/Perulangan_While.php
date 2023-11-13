<?php
// Perulangan While
$ulangi = 0;
while (<kondisi>) {
    # code...
}

?>

<?php
// Perulangan While
$ulangi = 0;                                        
while ($ulangi < 10) {                              //Perulangan while akan terus mengulang selama nilai $ulangi lebih kecil dari 10. 
    while ($ulangi < 10) {                          //Lalu di dalam perulangan kita melakukan increment nilai $ulangi dengan $ulangi++.
    echo "<p>Ini adalah perulangan ke-$ulangi</p>"; //Artinya: Tambah 1 disetiap pengulangan.
    $ulangi++;
}

?>