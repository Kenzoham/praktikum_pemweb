<?php
// buka class
class Manusia{
    //Property
    var $nama;
    var $warna;

    // function
    function tampilkan_nama(){
        return 'Nama saya adalah Abdullah Ilham';
    }

    function __construct(){
        return '<br/> Kulit saya berwarna sawo matang';
    }
}//tutup class

//objek
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> __construct();


?>