<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Utama</title>
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
            <h1>MySchool - Upload Berkas</h1>
            <form action="upload_berkas_proses.php" method="post">
                <label for="ayah" class="form-label">Nama Ayah</label>
                <input type="text" name="ayah" class="form-control">
            </br>
                <label for="ibu" class="form-label">Nama Ibu</label>
                <input type="text" name="ibu" class="form-control">
            </br>
                <label for="ijazah" class="form-label" >Ijazah</label>
                <input type="file" name="ijazah" class="form-control"/>
            </br>
                <label for="akte" class="form-label">Akte</label>
                <input type="file" name="akte" class="form-control"/>
            </br>
                <button type="submit" class="btn btn-primary">Upload Berkas</button>
            </form>
        </div>
    </body>
</html>