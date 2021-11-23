<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (register($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'tampilan.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah User</title>
    <style>
        label {
            display : block;
        }
    </style>
</head>
<body>
    <h1> Tambah User</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
             <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
               <button type="submit" name="submit">Tambah Data </button>
            </li>
        </ul>

    </form>
</body>
</html>