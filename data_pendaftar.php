<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Utama</title>
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
                        <a class="nav-link" href="halaman_utama_admin.php">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <?php
        $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", "root", "");
        $query = "select * from username_siswa";
        $result = $db->query($query);
        ?>
        <div class="container">
            <h1>Admin MySchool - Daftar Siswa Baru</h1>
            <table class=table>
            <tr>    
                <th class='col col-md-2'>Nama</th>
                <th class='col col-md-2'>Tempat Lahir</th>
                <th class='col col-md-2'>Tanggal Lahir</th>
                <th class='col col-md-2'>Usia</th>
                <th class='col col-md-2'>Jarak</th>
                <th class='col col-md-2'>Persetujuan</th>
            </tr>
            <?php
            for($i = 0; $i < 2; $i++) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $date = new DateTime($row['tanggalLahir']);
                $now = new DateTime();
                $age = $now->diff($date);
                echo "<table class='table table-striped'>
                <tr>
                    <td class='col col-md-2'>{$row['nama']}</td>
                    <td class='col col-md-2'>{$row['tempatLahir']}</td>
                    <td class='col col-md-2'>{$row['tanggalLahir']}</td>
                    <td class='col col-md-2'>$age->y Tahun</td>
                    <td class='col col-md-2'>{$row['jarak']} Km</td>
                    <td class='col col-md-2'><a href=update_status.php?id={$row['ID_Siswa']}&opt=terima>Terima</a> 
                    <a href=update_status.php?id={$row['ID_Siswa']}&opt=tolak>Tolak</a></td>
                </tr>
                </table>";
            }
            ?>
        </div>
    </body>
</html>