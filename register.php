<?php
include 'koneksi.php';
include 'enkripsi.php';

    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $pass_salt = $pass . $uname;

    $text = $pass_salt;
    $passenc = encrypt($text, $key);
    $sql = "INSERT INTO customer (fullname, address, email, username, password) VALUES ('$fullname', '$address','$email', '$uname', '$passenc')";
    if ($conn->query($sql) ===  TRUE) {
        header("location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?> 