<!DOCTYPE html>
<html>
    <head>
        <title>Form Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Tadika Mesra</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="siswa.php">Login as Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Login as Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Registrasi</h1>
            <form action="register_proses.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label">Confirm Password</label>
                    <input type="text" name="confirm" class="form-control"/>
                </div>

                <!-- <button id="koordinat">Koordinat Tempat Tinggal</button> <br> -->
                <button type="submit" class="btn btn-primary">Register</button>
                <p>Already have an account? <a href="siswa.php">Login</a></p>
            </form>
        </div>
    </body>
</html>