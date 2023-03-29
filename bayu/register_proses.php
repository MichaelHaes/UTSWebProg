<!DOCTYPE html>
<html>
    <head>
        <title>Proses Registrasi</title>
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
            <h1>Proses Registrasi</h1>
            <?php
            session_start();
            require_once __DIR__ . '/vendor/autoload.php';
            use Gregwar\Captcha\CaptchaBuilder;

            $builder = new CaptchaBuilder;
            $builder->build();

            if (isset($_POST['captcha'])) {
                $captcha = $_POST['captcha'];
            
                if ($builder->testPhrase($captcha)) {
                    if($_POST['password'] != $_POST['confirm_password']) {
                        $_SESSION['diffPass'] = true;
                        header("location: register.php");
                        die();
                    }
                    $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", "root", "");
                    $nameArr = explode(" ", strtolower($_POST['name']));
                    if (isset($nameArr[3])) echo $nameArr[3];
                    $username = $nameArr[0];
                    $mainLat = -6.256787240967942; // latitude umn
                    $mainLng = 106.61857029921752; // longitude umn
                    $en_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $lat = $_POST['latitude'];
                    $lng = $_POST['longitude'];
                    $distance = (6371 * acos((cos(deg2rad($mainLat))) * (cos(deg2rad($lat))) * (cos(deg2rad($lng) - deg2rad($mainLng)) )+ ((sin(deg2rad($mainLat))) * (sin(deg2rad($lat))))));
        
                    $query = "insert into username_siswa (nama, Username, Password, tempatLahir, tanggalLahir, alamat, jarak, foto)
                                VALUES(?,?,?,?,?,?,?)";
        
                    $result = $db->prepare($query);
                    $result->execute([$_POST['name'], $en_pass, $_POST['tempatLahir'], $_POST['tanggalLahir'], $_POST['alamat'], $distance, $_POST['foto']]);
                } else {
                    echo "Error";
                    header("location:register.php");
                }
            }
            ?>
            <p>Proses Registrasi berhasil</p>
            <a href="siswa.php"><button class="btn btn-primary">Login</button></a>
            <a href="index.php"><button class="btn btn-primary">Home</button></a>
        </div>
    </body>
</html>