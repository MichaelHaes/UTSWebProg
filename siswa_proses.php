<?php
    session_start();
    $username = $_POST['username'];
    $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", 'root', '');
    $query = "select * from username_siswa where Username=?";

    $result = $db->prepare($query);
    $result->execute([$_POST['username']]);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    if(!password_verify($_POST['password'], $row['Password'])) {
        $_SESSION['isWrong'] = true;
        header('location: siswa.php');
        die();
    }
    $_SESSION['id'] = $row['ID_Siswa'];
    $_SESSION['nama'] = $row['nama'];
    header("location: halaman_utama.php");
?>