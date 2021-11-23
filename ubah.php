<?php
require 'functions.php';

$Id = $_GET['Id'];

$sws = query("SELECT * FROM user WHERE Id = $Id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST, $Id) > 0) {
        echo "
                <script>
                    alert('data berhasil diupdate!');
                    document.location.href = 'tampilan.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate!');
                document.location.href = 'tampilan.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data user</title>
    <style>
        label {
            display : block;
        }
    </style>
</head>
<body>
    <h1> Update data user</h1>

    <form action="" method="post">
        <input type="hidden" name="Id" value="<?= $sws['Id'] ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" Id="nama" required
                value="<?= $sws['nama'] ?>">
            </li>
             <li>
                <label for="email">Email : </label>
                <input type="text" name="email" Id="email"
                value="<?= $sws['email'] ?>">
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" Id="username"
                value="<?= $sws['username'] ?>">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" Id="password"
                value="<?= $sws['password'] ?>">
            </li>
            <li>
               <button type="submit" name="submit">Update Data </butto>
            </li>
        </ul>

    </form>
</body>
</html>