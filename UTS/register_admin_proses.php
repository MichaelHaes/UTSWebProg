<?php
    $db = new PDO("mysql:host=localhost;dbname=uts_kelompok3", "root", "");
    $en_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "insert into username_siswa(ID_Pass, Password, Username) values(?,?,?)";
    $result = $db->prepare($query);

    $result->execute([1,$en_pass, $_POST['username']]);


?>