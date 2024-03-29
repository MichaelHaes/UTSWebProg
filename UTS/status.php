<!DOCTYPE html>
<html>
    <head>
        <title>Status Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="col-6">
                    <a href="index.php">
                        <img src="FOTO/logo.png" class="img-responsive" width="100" height="100">   
                        <a class="navbar-brand" href="index.php"><b>Tadika Mesra</b></a>   
                    </a>
                </div>
                <div class="col-6">
                    <ul class="navbar-nav navbar-expand-lg justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="halaman_utama.php">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
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