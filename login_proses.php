<?php
include 'koneksi.php';
include 'enkripsi.php';

$uname = $_POST["username"];
$pass = $_POST["password"];
$pass_salt = $pass . $uname;
$passenc = encrypt($pass_salt);

$data = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$uname' and password = '$passenc'");

if ($data->num_rows > 0) {
    $row = mysqli_fetch_assoc($data);
    session_start();
    $_SESSION["cust_id"] = $row['cust_id'];
    echo ("<script LANGUAGE='JavaScript'> window.alert('Login berhasil'); window.location.href='dashboard.php'; </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'> window.alert('Login gagal'); window.location.href='login.php'; </script>");
}
?>