<?php
    session_start();
    $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", "root", "");
    $query = "insert into berkas_siswa(nama_siswa, nama_ayah, nama_ibu, ijazah, akte)
    values(?, ?, ?, ?, ?)";

    $result = $db->prepare($query);
    $result->execute([$_SESSION['nama'], $_POST['ayah'], $_POST['ibu'], $_POST['ijazah'], $_POST['akte']]);

    $query = "update username_siswa set status = 'Belum Diterima' where ID_Siswa = {$_SESSION['id']}";
    $result = $db->query($query);

    header("location: halaman_utama.php");
?>