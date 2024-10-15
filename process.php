<?php declare(strict_types=1); 
    ob_start();
    session_start();
    include("dbcon.php");
    $tt = new dbcon();
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $kq = $tt ->XuLyDangNhap($user, $pass);
        if(mysqli_num_rows($kq) > 0) {
            $row = $kq -> fetch_assoc();
            $_SESSION['hoten'] = $row['HoTen'];
            $_SESSION['id'] = $row['idUser'];
            if($_POST['rem'] =="on"){
                setcookie("ht", $_SESSION['hoten'], time() + 60*60*24*7);
                setcookie("id", $_SESSION['id'], time() + 60*60*24*7);
            }
            header("location: index.php");
        }
        else header("location: login.php");
    }
?>