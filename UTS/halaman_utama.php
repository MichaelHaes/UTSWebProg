<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Utama</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
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
        }
        ?>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Tadika Mesra</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>MySchool</h1>
            <a href="status.php">Status</a></br>
            <a href="upload_berkas.php">Upload Berkas</a></br>
            <a href="cetak.php">Halaman Cetak</a></br>
            <a href="profil.php">Profil</a></br>
        </div>
    </body>
</html>