<?php
$rokok = ["Samsu", "Esse", "Kretek", "Marlong", "Garput"];

//Menghapus elemen pertama
$awal = array_shift($rokok);

//Hasil
echo "Rokok yang dihapus : $awal <br>";
echo "Array setelah shift <br>";
foreach ($rokok as $r) {
    echo "$r <br>";
}
?>