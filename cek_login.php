<?php

    //panggil kneksi database
    include "koneksi.php";

    $pass = ($_POST['password']);
    $username = mysqli_escape_string($koneksi, $_POST['username']);
    $password = mysqli_escape_string($koneksi, $pass);
    $level = mysqli_escape_string($koneksi, $_POST['level']);

    //cek username, terdaftar atau tidak
    $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = 
    '$username' and level='$level' ");
    $user_valid = mysqli_fetch_array($cek_user);
    //jika username terdaftar maka
    if ($user_valid) {
        //jik username terdaftar maka selanjutnya
        //cek passwrd sesuai atau tidak
        if ($password == $user_valid['password']) {
            //jika passwrd sesuai maka selanjutna
            //buat session
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
            $_SESSION['level'] = $user_valid['level'];

            //uji level user
            if($level == "Admin"){
                header('location:admin/index.php');
            } elseif ($level == "User"){
                header('location:index.php');
            }
        } else {
            echo "<script>alert('Maaf login anda gagal, password anda tidak sesuai');
            document.location='login.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf login anda gagal, username anda tidak terdaftar');
        document.location='login.php'</script>";
    }