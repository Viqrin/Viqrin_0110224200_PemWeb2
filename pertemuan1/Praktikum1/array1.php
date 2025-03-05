<?php
$ar_buah = ["Semangka", "Mangga", "Pisang", "Sirsak"];

//Memanggil array
echo "buah ke 2 adalah $ar_buah[2]";

//Mencetak jumlah array
echo "<br>jumlah array: " . count($ar_buah);

//Mencetak seluruh buah
echo '<br> Seluruh Buah <ol>';
    foreach ($ar_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    }
//Menambahkan buah
$ar_buah[]="Nanas";

//Hapus buah index ke 1
unset($ar_buah[1]);

//Ubah index ke 4 menjadi melon
$ar_buah[4]="Melon";

//Cetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $ak => $av){
    echo '<li>index' .$ak. ' - Nama Buah ' .$av. '</li>';
}
echo '</ul>';
?>