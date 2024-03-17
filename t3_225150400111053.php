<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tanggalLahir = $_POST["tanggalLahir"];
    $gender = $_POST["gender"];
    $tempat = $_POST["tempat"];
    $alamat = $_POST["alamat"];

    echo "<br>";
    echo "Nama : $nama<br>";
    echo "<br>";
    echo "Email : $email<br>";
    echo "<br>";
    echo "Tanggal Lahir : $tanggalLahir<br>";
    echo "<br>";
    echo "Gender : $gender<br>";
    echo "<br>";
    echo "Tempat Tinggal : $tempat<br>";
    echo "<br>";
    echo "Alamat : $alamat<br>";
} else {
    echo "Oops! Ada kesalahan dalam pengiriman data.";
}
?>
