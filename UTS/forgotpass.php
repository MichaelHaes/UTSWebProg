<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Tadika Mesra</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="siswa.php">Login as Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Login as Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Forgot Password</h1>
            <form action="forgotpass_proses.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="text" name="new_password" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="text" name="confirm_password" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Confirm</button></br>
            </form>
        </div>
    </body>
</html>