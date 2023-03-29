<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <?php
        session_start();
        ?>

<nav class="navbar navbar-expand-lg bg-primary justify-content-center">
            <div class="container-fluid">
                <a href="index.php">
                  <img src="FOTO/logo.png" class="img-responsive" width="100" height="100">      
                </a>
                <a class="navbar-brand" href="#"><b>Tadika Mesra</b></a>
                <ul class="navbar-nav navbar-expand-lg">
                    <li class="nav-item">
                        <a class="nav-link" href="siswa.php">Login as Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Login as Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <br>

        <div class="container">
            <h1 class="text-center">Login Admin</h1>
            <form action="admin_proses.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>
                <?php if(isset($_SESSION['isWrong'])) {?>
                    <div class="alert alert-danger" role="alert">
                        Wrong Password/Username. Please try again
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
</html>

<!-- username / password -->
<!-- admin / admin123 -->