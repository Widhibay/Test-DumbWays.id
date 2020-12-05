<?php

function toko_tempatA($jarak, $harga, $bensin){
    echo "<pre>Toko     - Tempat A  = $jarak   KM   | Rp  $harga | $bensin Liter";
}
function tempatA_tempatD($jarak, $harga, $bensin){
    echo "<pre>Tempat A - Tempat D  = $jarak   KM   | Rp $harga | $bensin Liter";
}
function tempatD_tempatC($jarak, $harga, $bensin){
    echo "<pre>Tempat D - Tempat C  = $jarak KM   | Rp  $harga | $bensin   Liter";
}
function tempatC_toko($jarak, $harga, $bensin){
    echo "<pre>Tempat C - Toko      = $jarak KM   | Rp $harga | $bensin Liter";
}

toko_tempatA(2, "5.600", 0.8);
echo "<br>";
tempatA_tempatD(9, "25.200", 3.6);
echo "<br>";
tempatD_tempatC(2.5, "7.000", 1);
echo "<br>";
tempatC_toko(8.5, "23.800", 3.4);
echo "<br><br>";
echo "<strong>Total Jarak = "; echo (2 + 9 + 2.5 + 8.5); echo " KM<strong>";
echo "<br><br>";
echo "<strong>Total Harga = Rp "; echo (5600 + 25200 + 7000 + 23800); echo "<strong>";
echo "<br><br>";
echo "<strong>Total Bensin = "; echo (0.8 + 3.6 + 1 + 3.4); echo " Liter<strong>";
echo "<br><br>";

?>