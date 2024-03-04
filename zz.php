<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'priceem'); 

if($koneksi){
    echo 'berhasil';
} else {
    echo 'gagal';
}
?>