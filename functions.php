<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_latihanlsp');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = strtolower(stripslashes(htmlspecialchars($data['username'])));
    $password = mysqli_real_escape_string(
        $conn,
        htmlspecialchars($data['password'])
    );

    if ($result) {
        echo "<script>
                alert('Username sudah digunakan');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user
    VALUES
    ('', '$nama', '$email', '$username', '$password')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data, $Id)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $query = "UPDATE user  SET 
                    nama = '$nama', 
                    email = '$email', 
                    username = '$username', 
                    password = '$password' 
            
                WHERE Id = $Id
                    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE Id = $Id");
    return mysqli_affected_rows($conn);
}
