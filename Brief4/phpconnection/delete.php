<?php 

    include 'connection.php';

    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
    }

    $sql="DELETE  from clubs where idclubs = '$id'";
    $result=mysqli_query($conection,$sql);
    $sql1="DELETE  from events where idevents = '$id'";
    $result=mysqli_query($conection,$sql);
    $result1=mysqli_query($conection,$sql1);
    if ($result){
        header("Location:../AdminPage.php");
    }

    if ($result1){
        header("Location:../AdminPage.php");
    }


  