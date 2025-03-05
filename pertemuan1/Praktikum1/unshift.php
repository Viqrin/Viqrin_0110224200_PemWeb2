<?php
$laptop = ["Asus", "Lenovo", "Dell", "Realme"];

//Menambhakan elemen diawal
array_unshift($laptop, "HP", "Acer");

//Hasil
echo "Hasil";
foreach ($laptop as $p){
    echo "<br>". $p;
}
?>