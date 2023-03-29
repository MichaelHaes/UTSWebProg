<!DOCTYPE html>
<html>
    <head>
        <title>Status Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Tadika Mesra</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="halaman_utama.php">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>MySchool - Status Siswa</h1>
            <?php
            session_start();
            $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", "root", "");
            $query = "select * from username_siswa where ID_siswa = ?";
            $result = $db->prepare($query);
            $result->execute([$_SESSION['id']]);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            
            echo "<pre>";
            echo "Nama : $row[nama] <br>";
            echo "Status : $row[status]";
            ?>
            <br>
            <p>Ketentuan:
a. Belum terdaftar – Siswa belum disetujui pendaftarannya oleh admin.
b. Ditolak - Siswa ditolak pendaftarannya oleh admin
c. Terdaftar – Siswa disetujui pendaftarannya oleh admin
d. Belum Diterima – Siswa sudah upload berkas, namun belum disetujui oleh admin
e. Diterima – Siswa disetujui berkasnya oleh admin.</p>
        </div>
    </body>
</html>