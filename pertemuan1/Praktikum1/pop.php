<?php
$siswa = ["Tian", "Asep", "Ahong", "Cipe"];

//Menampilkan array awal 
echo "<br>Array awal : <br>";
print_r($siswa);

//Menghapus elemen erakhir dari array
$orang_terakhir = array_pop($siswa);

//Menampilkan elemean yang dihapus
echo "<br>Elemen yang akan di hapus" .$orang_terakhir;

//Menampilkan array setekah penghapusan
echo "<br>Array setelah penghapusan : <br>";
print_r($siswa);
?>