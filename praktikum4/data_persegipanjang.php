<?php
require_once "class_persegiPanjang.php";
$persegiPanjang1 = new PersegiPanjang(4, 10);
$persegiPanjang2 = new PersegiPanjang(10, 5);

//luas
echo "Luas Persegi Panjang I " . $persegiPanjang1->getLuas();
echo "<br/>Luas Persegi Panjang II " . $persegiPanjang2->getLuas();

//keliling
echo "<br/><br/>Keliling Persegi Panjang I " . $persegiPanjang1->getKeliling();
echo "<br/>Keliling Persegi Panjang II " . $persegiPanjang2->getKeliling();