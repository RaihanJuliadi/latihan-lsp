<?php

require 'functions.php';
$db_latihanlsp = query('SELECT * FROM user');

if (isset($_POST['cari'])) {
    $db_latihanlsp = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Latihan Lsp</title>
</head>
<body>

<h1> Data User </h1>

<a href="tambah.php">Tambah User</a>
<br><br>

<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>

    </tr>

    <?php $i = 1; ?>
    <?php foreach ($db_latihanlsp as $row): ?>
    <tr>
        <td> <?= $i ?> </td>

        <td> <?= $row['nama'] ?> </td>
        <td> <?= $row['email'] ?> </td>
        <td> <?= $row['username'] ?> </td>
        <td> <?= $row['password'] ?> </td>
        <td>
            <a href="ubah.php?Id=<?= $row['Id'] ?>">ubah</a> / 
            <a href="hapus.php?Id=<?= $row['Id'] ?>" onclick="
            return confirm('Yakin anda ingin menghapus?');">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
    <button> <a href="logout.php"></a>Logout</button>
</body>
</html>