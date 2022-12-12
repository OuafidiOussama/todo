<?php 
    session_start();

    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from admin where  email='$email' && password='$password'";
    if (mysqli_num_rows(mysqli_query($conection,$query))==1){
        $_SESSION['admin']= 'true';
        header("Location:../AdminPage.php");
    }else{
        header("Location:../index.php?error='wrong-email-or-psw'"); 
    }

