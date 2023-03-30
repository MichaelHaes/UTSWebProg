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
        $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", 'root', '');
        $query1 = "select * from username_siswa";
        $query2 = "select * from berkas_siswa";
        $result1 = $db->query($query1);
        $result2 = $db->query($query2);
        ?>
        <div class="container">
            <h1>Admin MySchool - Cek Berkas Siswa</h1>
            <table class=table>
            <tr>    
                <th class='col col-md-2'>Nama</th>
                <th class='col col-md-2'>Nama Ayah</th>
                <th class='col col-md-2'>Nama Ibu</th>
                <th class='col col-md-2'>Ijazah</th>
                <th class='col col-md-2'>Akte</th>
                <th class='col col-md-2'>Persetujuan</th>
            </tr>
            <?php
            for($i = 0; $i < 2; $i++) {
                $row1 = $result1->fetch(PDO::FETCH_ASSOC);
                $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                echo "<table class='table table-striped'>
                <tr>
                    <td class='col col-md-2'>{$row2['nama_siswa']}</td>
                    <td class='col col-md-2'>{$row2['nama_ayah']}</td>
                    <td class='col col-md-2'>{$row2['nama_ibu']}</td>
                    <td class='col col-md-2'>{$row2['ijazah']}</td>
                    <td class='col col-md-2'>{$row2['akte']}</td>
                    <td class='col col-md-2'><a href=persetujuan_berkas.php?id={$row1['ID_Siswa']}&opt=terima>Terima</a> 
                    <a href=persetujuan_berkas.php?id={$row1['ID_Siswa']}&opt=tolak>Tolak</a></td>
                </tr>
                </table>";
            }
            ?>
        </div>
    </body>
</html>