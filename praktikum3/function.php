<?php
// contoh function tanpa parameter
function nama () {
    $nama = "Abdullah Ilham";
    echo 'Nama saya adalah '.$nama;
};

function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "TI06";
    echo '<br/> Umur saya sekarang adalah '. $umur .'<br/> Dan sekarang saya kelas '.$kelas;

};
nama();
umur_kelas (2002);
?>